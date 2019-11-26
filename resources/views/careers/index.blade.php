@extends('layouts.front')
@section('title','Career - Career Opportunities')
@section('content')
<style type="text/css">
b, strong {
	font-weight: 100;
}
strong {
    
    color: red;
}
</style>

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
	    	@if($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{$message}}
				</div>
			@endif
	    	<h4 class="headline">Career Opportunities</h4>
	    	<p>We exist because of our people. We respect and nurture people for their growth. We are equal opportunity employer. We are committed to become an employer who value innovative people therefore, we are one of the fastest growing consulting firm.</p>
	    	<p></p>
	    	<h5>We have the opportunities in the following areas,</h5>
	    	<p></p>
			<ul class="arrow_list">
				@foreach($jobs as $index)
	            <li>{{$index->job_title}}<a data-id="{{$index->id}}"  href="#" class="button small green pull-right jobIndex"><i class=" icon-pencil icon-white"  ></i>Apply</a></li>
	            <p></p>

	            @endforeach
	        </ul>

	    </div>
		<div id="careers" <?php if ($errors->isEmpty()) {  echo 'hidden'; } ?>>
			<h4 class="headline">Quick Application</h4>
			<div class="success-message">
				<div class="notification success closeable">
					<p><span>Success!</span> Your message has been sent.</p>
				</div>
			</div>

			<!-- Code for form submission -->
			<!-- Code for form submission -->

			<div id="contact-form">
				<form id="careerform" action="{{route('careers.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="job_id" value id="job_id">
					
					<div class="field">
						<label>Full Name:
							@error('name')
					          <span class="text-danger" role="alert">
					            <strong >* {{ $message }}</strong>
					          </span>
				      		@enderror
						</label>
						<input type="text" name="name" class="text"  />	
					</div>
					
					<div class="field">
						<label>Email: 
							{{-- <span>*</span> --}}
							@error('email')
				          	<span class="text-danger" role="alert">
				            	<strong>* {{ $message }}</strong>
				          	</span>
				      		@enderror
						</label>
						<input type="text" name="email" class="text"  />
					</div>

					<div class="field">
						<label>Phone:
							@error('mobileno')
				          		<span class="text-danger" role="alert">
				            		<strong>* {{ $message }}</strong>
				          		</span>
				      		@enderror
						</label>
						<input type="text" name="mobileno" class="text"/>
					</div>

					<div class="field">
						<label>Address: 
							@error('address')
				          		<span class="text-danger" role="alert">
				            		<strong> {{ $message }}</strong>
				          		</span>
				      		@enderror
						</label>
						<input type="textarea" name="address" class="text"  />
					</div>
					<br>
					<div class="field">
						<label>About: {{-- <span>*</span> --}}</label>
						<textarea name="address" class="text"  placeholder="Tell us amazing things about you.."></textarea>
					</div>
					<br>
					<div class="field">
						<label>Upload resume: {{-- <span>*</span> --}}</label>
						<input type="file" name="file_path" class="text" />
					</div>
					<br>
					<div class="field">
						<label>Captcha: 
							@error('captcha')
				          		<span class="text-danger" role="alert">
				            		<strong> {{ $message }}</strong>
				          		</span>
				      		@enderror
						</label>
						
						<div class="captcha col-4 row">
							<span>{!! captcha_img('flat') !!}</span>
						{{-- <img src="images/refresh.png" alt="reload" class="refresh" style="cursor:pointer;" /> --}}
						<input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="inputcaptcha"  autocomplete="off">
					</div>
					</div>
					<!---  Alert sucess
					<div class="alert alert-success" id="career1"> 
							    <button type="button" class="close" data-dismiss="alert">x</button>
							    <strong>Success! </strong>Your form has been Submitted Successfully.
					</div>
	                Alert sucess-->
					<p></p><p></p>
					<div class="field">
						<input class="button medium yellow" type="submit" id="send" name="career_submit" value="Submit" style="width: 20%; margin: auto;" />
						<div class="loading"></div>
					</div>
					<div>
					 <b> NOTE : Physical presence with original documents is mandatory at Indore office , during the recruitment process. Telephonic conversation will not be considered for final selection. </b>
				    </div>
				</form>
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

  <script type="text/javascript">
           
      $(document).ready(function(){

      	$('.jobIndex').on('click', function(){
      		$('#careers').removeAttr('hidden');
      		var job_id = $(this).attr('data-id');
      		$.ajax({
      			type: 'get',
      			url: "/job-apply/"+job_id,
      			success:function(id){
      				//alert(id);
					$('#job_id').val(id);
				}
      		})
      	});






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