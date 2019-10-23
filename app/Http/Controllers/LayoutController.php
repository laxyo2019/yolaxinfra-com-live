<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;
use App\Mail\SendMailCareeradmin;
use App\Mail\MailforContact;
class LayoutController extends Controller
{
    public function welcome(){
        $hf = DB::table('site_vars')->get();
         return view('welcome', compact('hf'));
    }
    public function about(){
         $hf = DB::table('site_vars')->get();
    	 return view('frontend.about', compact('hf'));
    }

    public function railway_consultancy(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.railway-consultancy', compact('hf'));
    }

    public function feasibility_study_report(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.feasibility-study-report', compact('hf'));
    }

    public function rail_traffic_clearance(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.rail-traffic-clearance', compact('hf'));
    }

    public function survey_construction_plan(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.survey-construction-plan', compact('hf'));
    }

    public function detailed_project_report(){
        
        $hf = DB::table('site_vars')->get();
    	return view('frontend.detailed-project-report', compact('hf'));
    }

    public function engineering_scale_plan(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.engineering-scale-plan', compact('hf'));
    }

    public function overhead_electrification(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.overhead-electrification', compact('hf'));
    }

    public function signaling_telecommunication(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.signaling-telecommunication', compact('hf'));
    }

    public function construction_supervision(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.construction-supervision', compact('hf'));
    }

    public function d3_mapping_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.3d-mapping-survey', compact('hf'));
    }

    public function drone_uav_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.drone-uav-survey', compact('hf'));
    }

    public function topographical_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.topographical-survey', compact('hf'));
    }
    
    public function drone_lidar_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.drone-lidar-survey', compact('hf'));
    }

    public function infrastructure_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.infrastructure-survey', compact('hf'));
    }

    public function renewable_energy_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.renewable-energy-survey', compact('hf'));
    }

    public function smart_city_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.smart-city-survey', compact('hf'));
    }

    public function agriculture_survey(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.agriculture-survey', compact('hf'));
    }


    public function repair_customization(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.repair_customization', compact('hf'));
    }

    public function echosounder(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.echosounder', compact('hf'));
    }

    public function energy_efficiency_and_power_consultancy(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.energy-efficiency-and-power-consultancy', compact('hf'));
    }

    public function energy_audit_service(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.energy-audit-service', compact('hf'));
    }

    public function energy_efficiency_consultancy(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.energy-efficiency-consultancy', compact('hf'));
    }
    public function energy_management_and_power_cost_reduction(){
        $hf = DB::table('site_vars')->get();
        return view('frontend.energy-management-and-power-cost-reduction', compact('hf'));
    }
    public function green_building_consultancy(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.green-building-consultancy', compact('hf'));
    }

    public function solar_power_consultancy(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.solar-power-consultancy', compact('hf'));
    }

    public function power_cost_reduction(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.power-cost-reduction', compact('hf'));
    }

    public function health_safety_and_environment(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.health-safety-and-environment', compact('hf'));
    }
    public function maintenance_managementaudit(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.maintenance-managementaudit', compact('hf'));
    }
     
    public function maintenance_management_audit(){
        $hf = DB::table('site_vars')->get();
        return view('frontend.maintenance-management-audit', compact('hf'));
    } 
    public function captive_powerplant(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.captive-powerplant', compact('hf'));
    }
    public function captive_power_plant(){
        $hf = DB::table('site_vars')->get();
        return view('frontend.captive-power-plant', compact('hf'));
    }

    public function third_party_construction_audit(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.third-party-construction-audit', compact('hf'));
    }

    public function school_education_consulting(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.school-education-consulting', compact('hf'));
    }

    public function school_planning_construction_assistance(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.school-planning-construction-assistance', compact('hf'));
    }

    public function affiliation_Legal_assistance(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.affiliation-Legal-assistance', compact('hf'));
    }

    public function Marketing_business_development(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.Marketing&business-development', compact('hf'));
    }

    public function recruitment_selection_procedure(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.recruitment&selection-procedure', compact('hf'));
    }

    public function management_system_consulting(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.management-system-consulting', compact('hf'));
    }

    public function value_added_product_strategies(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.value-added-product-strategies', compact('hf'));
    }

    public function quality_policy(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.quality-policy', compact('hf'));
    }

    public function client(){
        $hf = DB::table('site_vars')->get();
    	return view('frontend.client', compact('hf'));
    }


    public function contact(){
        $hf = DB::table('site_vars')->get();
        $drp = DB::table('site_dropdowns')->get();
    	return view('frontend.contact', compact('drp', 'hf'));
    }
    

    public function career(){
        $hf = DB::table('site_vars')->get();
        $job = DB::table('job_posts')->orderBy('id','desc')->where('site_code', '002')->get();
        return view('frontend.career', compact('job','hf'));
    }

    //contact insert 
    public function contactinsert(Request $request){
            $this->validate($request ,[
            'name' => 'required|min:6',
            'company_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'plant' => 'required',
            'state' => 'required',
            'open_power' => 'required',
            'captive_power' => 'required',
            'capacity' => 'required',
            'power_consumption' => 'required',
            'steam' => 'required',
            'steam_consumption' => 'required',
            'production' => 'required',
            'captcha' => 'required|captcha'
        ]);
        $formcode = DB::table('form_mast')->select('*')->get();
        foreach ($formcode as $key => $value) {
             if ($value->site_code == '002' && $value->form_title == 'contact form') {
                 $conform = $value->form_code;
             }
        }
        
        $data  = array(
            'form_code' => $conform,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email, 
            'mobile' => $request->mobile,
            'plant'=> $request->plant,
            'state_ect_brd' => $request->state,
            'open_power' => $request->open_power,
            'captive_power' => $request->captive_power,
            'capacity' => $request->capacity,
            'power_consumption' => $request->power_consumption,
            'steam' => $request->steam,
            'steam_consumption' => $request->steam_consumption,
            'production' => $request->production,
            'message' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        );
        DB::table('form_contact')->insert($data); 
         $mail = DB::table('site_vars')->select('*')->get();
         foreach ($mail as $value) {
             if ($value->site_code == '002' && $value->var_key == 'contact mail id') {
                 $mail = $value->var_value;
             }
         }
         Mail::to($mail)->queue(new MailforContact($data));
        
        return redirect('/contact')->with('message','Data Successfully inserted');
    }
  
   // contact form for captcha refresh
    public function refreshCaptcha()
    {
        return captcha_img('flat');
    }
   
    // career For apply particular id
     public function careerapply(Request $request)
     {

        $this->validate($request,[
            'fullname'=>'required|min:6',
            'email' => 'required|email|',
            'phone' => 'required|numeric|digits:10',
            'profile' =>'required',
            'file' =>'required|max:10000|mimes:doc,docx,pdf'
       ]);
        $formcode = DB::table('form_mast')->select('*')->get();
        foreach ($formcode as $key => $value) {
             if ($value->site_code == '002' && $value->form_title == 'career form') {
                 $carform = $value->form_code;
             }
        }
        $file = $request->file('file');
        $filename =  time().'_'.$file->getClientOriginalName();
        $path = $file->storeAs('public/document', $filename);
        $url1 = Storage::url('public/document/'.$filename);
        $url = url()->current();
                  $url_1=explode("/",$url);
                  $orignail_url=$url_1[0]."/".$url_1[1]."/".$url_1[2];

        $url1 = $orignail_url.$url1;
         $data = array(
            'form_code'=> $carform,
            'job_id' => $request->jobid,
            'name' => $request->fullname,
            'email' => $request->email,
            'mobileno'=> $request->phone,
            'file' => $filename,
            'doc_url' => $url1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('form_career')->insert($data); 
         $mail = DB::table('site_vars')->select('*')->get();
         foreach ($mail as $value) {
             if ($value->site_code == '002' && $value->var_key == 'career mail id') {
                 $mail = $value->var_value;
             }
         }
         $email = $request->email;
         Mail::to($mail)->queue(new SendMailCareeradmin($data));
         Mail::to($email)->queue(new SendMailUser($data));
        return redirect('/career')->with('message','Your Application inserted Successfully');
     }
}
