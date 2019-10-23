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
    	<p>We exist because of our people. We respect and nurture people for their growth. We are equal opportunity employer. We are committed to become an employer who value innovative people therefore, we are one of the fastest growing consulting firm.</p>
    	<p></p>
    	<h5>We have the opportunities in the following areas,</h5>
    	<p></p>
			{{-- <ul class="arrow_list">
				@foreach($job as $jobs)
				@if($jobs->active == 1)
	          <li>{{$jobs->job_title}}<a data-href="{{$jobs->id}}" data-name="{{$jobs->job_title}}" class="apply button small green pull-right" id=""><i class=" icon-pencil icon-white"  ></i>Apply</a></li>
	          @endif
	          @endforeach
	    </ul> --}}
    </div>
    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="text-danger">{{$error}}</div>
     @endforeach
   @endif
   @if(session()->has('message'))
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
	@endif
    <div class="row justify-content-center">
    <div class="col-md-8">
     <div id="career">
		<h4 class="headline">Quick Application</h4>
		
		<div id="contact-form">
			<form id="careerform" action="{{url('/careerapply')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				
				<div class="field">
					<label>Full Name:</label>
					<input type="text" name="fullname" class="text" required />
				</div>
				
				<div class="field">
					<label>Email: <span>*</span></label>
					<input type="text" name="email" class="text" required />
				</div>

				<div class="field">
					<label>Phone: <span>*</span></label>
					<input type="text" name="phone" class="text" required />
				</div>

				<div class="field">
					<label>Choose Profile: <span>*</span></label>
					<input id="profile" value="" name="profile" class="form-control" readonly>
					<input type="hidden" name="jobid" value="" id="jobid">
				</div>

				<div class="field">
					<label>Upload resume: <span>*</span></label>
					<input type="file" name="file" class="text" required />
				</div>
				
				<p></p><p></p>
				<div class="field">
					<input class="button medium yellow" type="submit" id="send" name="career_submit" value="Submit" style="width: 20%; margin: auto;" />
					<div class="loading"></div>
				</div>
<div>
				
				 <b> NOTE : Physical presence with original documents is mandatory at Indore office , during the recruitment process.
Telephonic conversation will not be considered for final selection. </b>
			    </div>
			</form>
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

  <script>
           
      $(document).ready(function(){
     $('#career').hide();
        $.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
        $('.apply').on('click', function () {
        	$('#career').toggle('fade in');
        	var id = $(this).attr('data-href');
           var name = $(this).attr('data-name')

           $('#jobid').val(id);
           $('#profile').val(name);
         
        });
       
      });
    </script>

@endsection