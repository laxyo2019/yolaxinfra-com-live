@extends('layouts.front')
@section('title','Contact Us - Yolax Infranergy')
@section('content')
<style>
.imgcaptcha, .refresh {
    display: inline;
    margin-bottom: 20px;
    margin-right: 39px;
    width: auto;
}
</style>


<!--  Page Title -->
<div id="page-title">
	<div class="container">
		<div class="sixteen columns">
			<h1>Contact</h1>
		</div>
	</div>
</div>


<div class="container">	
	<div class="eleven columns">		
	<h4 class="headline">Request For Offer</h4>
		<div class="row">
			@if (session('message'))
				<div class="alert alert-success">
					{{ session('message') }}
				</div>
			@endif
		</div>
		
		<div id="contact-form">
			<form method="post" action="{{ route('contact.store') }}" id="register">
				@csrf()

				<div class="row">
					<div class="col-4">
						<div class="field">
							<label style="font-size: 14px">Name of Contact Person:<span>*</span></label>
							<input type="text" name="name" id="name" class="text" value="{{old('name')}}"/>
							@if($errors->has('name'))
								<div class="error text-danger">{{ $errors->first('name') }}</div>
							@endif
						</div>
					</div>
					<div class="col-4">
						<div class="field">
							<label style="font-size: 14px">Mobile No.: <span>*</span></label>
							<input type="text" name="mobile" id="mobile" class="text" value="{{old('mobile')}}"/>
							@if($errors->has('mobile'))
								<div class="error text-danger">{{ $errors->first('mobile') }}</div>
							@endif
						</div>
					</div>
					<div class="col-4">
						<div class="field">
							<label style="font-size: 14px">Email: <span>*</span></label>
							<input type="text" name="email" id="email" class="text" value="{{old('email')}}" />
							@if($errors->has('email'))
							<div class="error text-danger">{{ $errors->first('email') }}</div>
							@endif
						</div>
					</div>
					<div class="col-4">
						<div class="field">
							<label style="font-size: 14px">Company Name: <span>*</span></label>
							<input type="text" name="company_name" id="company_name" class="text" value="{{old('company_name')}}" />
							@if($errors->has('company_name'))
							<div class="error text-danger">{{ $errors->first('company_name') }}</div>
							@endif
						</div>
					</div>
					<div class="col-8">
						<div class="field">
							<label style="font-size: 14px">Address: <span>*</span></label>
							<input type="text" name="address" id="address" class="text" value="{{old('address')}}" />
							@if($errors->has('address'))
							<div class="error text-danger">{{ $errors->first('address') }}</div>
							@endif
						</div>
					</div>
				</div>
				{{-- <div class="field">
					<label style="font-size: 14px">Company  Name &amp; Location &amp; Address:<span>*</span></label>
					<input type="text" name="company_name" id="company_name" class="text" value="{{old('company_name')}}" />
					@if($errors->has('company_name'))
						<div class="error text-danger">{{ $errors->first('company_name') }}</div>
					@endif
				</div> --}}
				<div class="row">
					<div class="col-12">
						<div class="field">
							<label style="font-size: 14px">Write About Your Requirement or Inquiry:</label>
							<textarea name="message" rows="30" cols="5" id="message" class="text textarea" >{{old('message')}}</textarea>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-4">
							<div class="field">
								<label>Captcha</label>
								
								<div class="captcha col-md-12 row">
									<span>{!! captcha_img('flat') !!}</span>
										{{-- &nbsp;&nbsp;&nbsp;&nbsp; --}}
								<img src="images/refresh.png" alt="reload" class="refresh" style="cursor:pointer;" />
								<input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="inputcaptcha"  autocomplete="off">
								</div>
							</div>	
					</div>
				</div>
							
				<div class="field">
					<input type="submit" id="send" value="Send Message" class="button medium yellow" style="width:150px; display:inline-block"/>
					<div class="loading"></div>
				</div>
				
			</form>
		</div>
	</div>
	
	<!-- Contact Details -->
	<div class="five columns">
    <h4 class="headline">See Our Location On Map</h4>
    <div id="google-map" class="embed">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14716.334994576137!2d75.9050051861115!3d22.762273059983077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631d5ae9abd47f%3A0x800e5498d0685003!2syolaxinfra+Energy+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1469626096377" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
		
		<h4 class="headline">Contact Details</h4>
		<ul class="contact-details" style="padding-top: 8px;">
			<li><i class="fa fa-map-marker"></i> <p>II - Floor, Plot No. 2, County Park<br/>MR-5, Mahalaxmi  Nagar,<br/>Indore, MP, India - 452010</p></li>
			<li><i class="fa fa-phone"></i> <p>Phone: 0731-4043798 | 0731-4996625</p></li>
			{{-- <li><i class="fa fa-envelope"></i><p>Email: <a href="mailto:info@yolaxinfra.com">info[at]yolaxinfra.com</a></p></li> --}}
		</ul>
		</div>


	<!-- Social Media -->
	

	
</div>
<script type="text/javascript">
$('.refresh').click(function(){
  $.ajax({
     type:'GET',
     url:'refreshcaptcha',
     success:function(data){
        $(".captcha span").html(data);
     }
  });
});
</script>
@endsection
