<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Job;;
use DB;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function condestroy($id){

		DB::table('form_contacts')->delete($id);
		/*$data = DB::table('form_contacts')
				->get();
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)*/
         //return view('admin.laxyo.contact', compact('data'));
         return back()->with('success', 'Record deleted');
    } 

    public function DeleteAll_contact(Request $request){

       $ids = $request->ids;
         //DB::table("form_contacts")->whereIn('id',explode(",",$ids))->delete();
       /*$data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();*/ 

      $data = Contact::latest()->get();
    
      return view('admin.contacts.table', compact('data'));
      
     }


     public function deleteAll_career_yolax(Request $request){
       $ids = $request->ids;
      DB::table("job_posts")->whereIn('id',explode(",",$ids))->delete();
      /*$data = DB::table('form_mast')
              ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get(); */
       $data = Job::all();

       return view('admin.careers.table',compact('data'));

          }
       } 

