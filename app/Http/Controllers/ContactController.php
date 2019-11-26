<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\MailforContact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
  public function index()
  {
    return view('contact.index');
  }

  public function store(Request $request)
  {
    //return $request->all();
    $vdata = $request->validate([
      'name'          => 'required|max:255|regex:/^[a-zA-Z ]+$/',
      'company_name'  => 'required',
      'address'       => 'nullable',
      'email'         => 'required|email|max:255',
      'mobile'        => 'required|max:10|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
      'message'       => 'required',
      'captcha'       => 'required|captcha'
    ]);
    
    $contact = new Contact;
    $contact->name          = $request->name;
    $contact->email         = $request->email;
    $contact->company_name  = $request->company_name;
    $contact->address       = $request->address;
    $contact->mobile        = $request->mobile;
    $contact->message       = $request->message;
    $contact->save();

    $user1 = User::find(1);
    Mail::to($user1)->send(new MailforContact($vdata));
    
    return back()->with('message', 'Thank You for contacting us, we will contact you soon...');
  }
}