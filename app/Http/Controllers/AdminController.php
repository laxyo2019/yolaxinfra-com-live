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
         DB::table("form_contacts")->whereIn('id',explode(",",$ids))->delete();
       /*$data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();*/ 

      $data = Contact::latest()->get();
    ?>
      <thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
        <tr style="">
        <th width="10%"><input type="checkbox" id="selectall_contact" name="selectall_contact"></th>
        <th>name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Message</th>
        <th>Time</th>
      <th>Action</th>
      </tr>
      </thead>
      <?php
        foreach($data as $con){
      ?>
      <tbody>
       <tr>
        <td><input type="checkbox" class="sub_chk_contact" data-id="{{$con->id}}"></td>
        <td><?php echo $con->name ?></td>
        <td><?php echo $con->email ?></td>
        <td><?php echo $con->company_name ?></td>
        <td><?php echo $con->address ?></td>
        <td><?php echo $con->mobile ?></td>
        <td><?php echo $con->message ?></td>
        <td><?php echo $con->created_at ?></td>
        <td>
          <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
          document.getElementById('delete-form-{{ $con->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

          <form id="delete-form-{{ $con->id }}" action="{{ route('contactdel', ['id' => $con->id ]) }}" method="POST" style="display: none;">
              @csrf
              @method('delete')
          </form>
        </td>
       </tr>
       </tbody>
      <?php
          
        }
     }


     public function deleteAll_career_yolax(Request $request){
       $ids = $request->ids;
      DB::table("job_posts")->whereIn('id',explode(",",$ids))->delete();
      /*$data = DB::table('form_mast')
              ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get(); */
       $data = Job::all();
        ?>
       <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td style="width: 5%"> <input type="checkbox" id="selectall_post" name="selectall_post"></td>
          <td style="width: 10%">Job Title</td>
          <td style="width: 10%">Location</td>
          <td style="width: 20%" colspan="2">Experience</td>
          <td style="width: 5%">Resume Necessary</td>
          <td style="width: 20%" colspan="2">Salary Range</td>
          <td style="width: 5%">Candidate Count</td>
          <td style="width: 10%">Action</td>
        </tr>
        <tr>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%">Min Exp</td>
          <td style="width: 10%">Max Exp</td>
          <td style="width: 5%"></td>
          <td style="width: 10%">From</td>
          <td style="width: 10%">To</td>
          <td style="width: 5%"></td>
          <td></td> 
        </tr>
    </thead>      
        <?php
        foreach($data as $datas){?>
         <tbody>
          <tr>
          <td><input type="checkbox" class="sub_chk" data-id="<?php $datas->id ?>"></td>
            <td><?php echo $datas->job_title ?></td>
            <td><?php echo $datas->job_location ?></td>
            <td><?php echo $datas->min_exp ?></td>
            <td><?php echo $datas->max_exp ?></td>
            <td><?php echo $posts->resume_req == 1 ? 'Yes' : 'No'?></td>
            <td><?php echo $sal_min ?></td>
            <td><?php echo $posts->sal_max ?></td>
            <td><?php echo $posts->no_of_pos ?></td>
            <?php if($datas->file == ''){?>
             <td>No file</td>
            <?php }else
            {?>
             <td>
              <a href="<?php $domain.'/storage/document/'.$datas->file ?>" target="_blank"><span class="fa fa-download fa-lg"></span></a>
              </td> 
             <?php }?>
             <td><?php echo $datas->created_at;?></td>
           </tr>
            </tbody>
            <?php
          }
       } 
}
