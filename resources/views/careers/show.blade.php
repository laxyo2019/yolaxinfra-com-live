@extends('layouts.front')
@section('title','Career - Career Opportunities')
@section('content')

<!--  Page Title -->
<div id="page-title">

	<!--  Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h2>Career in Yolaxinfra</h2>
		</div>
	</div>
	<!--  Container End -->
	
</div>
<!-- Page Title End -->

<!--  Container -->
<div class="container">

	<!-- Standard Structure -->
	<div class="twelve columns">
    <div class="sixteen colomns page-image">
        <img src="{{asset('images/career.jpg')}}">  
    </div>
    <div class="new-post">
    	<h4 class="headline">Career Opportunities</h4>
    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
	     <div class="card">
        <div class="card-body">
          <div class="col-md-12 col-sm-12">
            <a href="{{url('/careers')}}" style="font-size: 20px;">back</a>
            <hr>
          </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Job Title</label> 
              </div>
              <div class="col-md-8">
                <label>{{$job->job_title}}</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Job Location</label> 
              </div>
              <div class="col-md-8">
                <label>{{$job->job_location}}</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Experience</label> 
              </div>
              <div class="col-md-8">
                <label>{{$job->min_exp}} to {{$job->max_exp}} yr</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Resume</label> 
              </div>
              <div class="col-md-8">
                @if($job->resume_req == '1')
                <label>Necessary</label>
                @else
                <label>No Necessary</label>
                @endif
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Salary</label> 
              </div>
              <div class="col-md-8">
                <label>{{$job->sal_min}} To {{$job->sal_max}}</label> 
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Closing Date</label> 
              </div>
              <div class="col-md-8">
                <label class="text-danger">{{$job->close_dt}}</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Candidate Need</label> 
              </div>
              <div class="col-md-8">
                <label>{{$job->no_of_pos}}</label>
              </div>
            </div>
             <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Description</label> 
              </div>
              <div class="col-md-8">
                <label><?php echo $job->job_desc ?></label>
              </div>
            </div>
        </div>
       </div>   
	</div>
    </div>
   
    
	 </div>  
	
	<!-- Sidebar Start -->	
	<div class="four columns">
		
		@include('partials.sidebar')
		
		<!-- Large Notice Image -->
		 
<!-- Sidebar end -->	
</div>
<!--  Container End -->

</div>
<!-- End  Container -->

  
@endsection