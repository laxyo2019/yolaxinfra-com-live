<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Career;

class CareersController extends Controller
{
	public function index()
	{
		$jobs = Job::latest()->get();
		return view('careers.index', compact('jobs'));
	}

	public function create( $id){

		$job = Job::find( $id);
		return view('careers.create', compact('job'));

	}
/*
  public function application($id){

    return $id;
  }*/

	public function store(Request $request){
    //return 65;
		$this->validate($request,[
            'name'    => 'required',       
            'email'   => 'required|email|max:255',
            'mobileno'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'captcha' => 'required|captcha',
          	[    
            	'name.required' => 'Name should be filled',
              'mobileno.required' => 'Mobile No. should be filled',
          	] ]
      	);
    $job = Job::where('id', $request->job_id)->first();

    if(!empty($job)){
      if($request->hasFile('file_path')){

          $dir      = 'careers/'.date("Y").'/'.date("F");
          $file_ext = $request->file('file_path')->getClientOriginalExtension();
          $filename = 'document_'.time().'.'.$file_ext;
          $path     = $request->file('file_path')->storeAs($dir, $filename);

        }else{
          $path = null;
        }

        $careers = new Career;
        $careers->job_id    = $request->job_id;
        $careers->name      = $request->name;
        $careers->email     = $request->email;
        $careers->address   = $request->address;
        $careers->mobile    = $request->mobileno;
        $careers->message   = $request->about;
        $careers->file_path = $path;
        $careers->created_at= date('Y-m-d H:i:s');
        $careers->save();

        return back()->with('success', 'Thank You for contacting us, we will contact you soon...');
    }else{
      return back()->with('failure', 'You can not apply for this job.');
    }

        

        
	}

	/*public function show($id){

        $job = Job::find($id);
        return view('careers.show', compact('job'));
    }*/



}