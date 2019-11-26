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
    	
    <div class="new-post">
    	<h4 class="headline">Career Opportunities</h4>
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		
		<div class="row">
      <div class="col-md-12 col-sm-12">
            <a href="{{url('/careers')}}" style="font-size: 20px;">back</a>
            <hr>
      </div>
      <div class="col">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div><br />
        @endif
      </div>
      
			 <div class="col-md-12">
		
			 <form id="careerform" action="{{route('career.applicant', $job->id)}}" method="post" class="form" enctype="multipart/form-data">
      	     <div class="card form-group">
      	     @csrf
      	     <div class="card-header bg-primary">
      	     	Career Apply Form
      	     </div>
      	     <div class="card-body">
		      	      <input type="hidden" id="job_id" class="form-control" name="job_id" value="{{$job->id}}">
                     <div class="row">
             			<div class="col-md-6">
                        <input class="form-control" name="name" placeholder="Your Full Name (**Mandatory)" type="text" value="{{old('name')}}" required="required">
	                    @if ($errors->has('name'))
						            <div class="error text-danger">{{ $errors->first('name') }}</div>
						          @endif
	                    </div>
	                    <div class="col-md-6">
	                        <input class="form-control" name="email" placeholder="Your Email (**Mandatory)" type="text" required="required" value="{{old('email')}}">
	                        @if ($errors->has('email'))
						              <div class="error text-danger">{{ $errors->first('email') }}</div>
						          @endif
                    	</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" maxlength="10"  name="mobileno" placeholder="Your Mobile Number (**Mandatory)" type="text" required="required" value="{{old('mobileno')}}">
                                @if ($errors->has('mobileno'))
								      <div class="error text-danger">{{ $errors->first('mobileno') }}</div>
								      @endif
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" id="careeraddress" name="address" placeholder="Your Address" onFocus="geolocate()" type="text" value="{{old('address')}}" >
                            </div>
                        </div>
                        
                    	<textarea class="form-control" rows="6" name="about" placeholder="Tell us amazing about You...">{{old('about')}}</textarea>
                    
                         <div class="row">
                         @if($job->resume_req == '1')
                              <div class="col-md-12">
			                        <div class="form-group">
			                            <label for="exampleInputFile">Upload Resume</label>
			                            <input id="file" name="file_path" type="file">
			                            <p class="help-block">Attach .doc, .pdf files only (Min of 3MB)</p>
			                        </div>
			                        </div>
    			               @else
    			                 	<div class="col-md-12">
    			                 		Not Need
    			                 	</div>
			                
			                   @endif
			              </div>
			              <div class="row">
					          <div class="col-md-4">
					             <div class="captcha">
					               <span>{!! captcha_img('flat')!!}</span>
					              
					               </div>
					            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-8">
				             <div class="col-md-6">
				             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" autocomplete="off">
                             </div>
                             <div class="col-md-6">
                             	@if ($errors->has('captcha'))
								    <div class="error text-danger">{{ $errors->first('captcha') }}</div>
								@endif
                             </div>
					         </div>
				          </div>
                        <br>
                        <div class="card-footer">
			        	<button type="submit" class="btn btn-primary">Send Details</button>
			        	<button type="reset" id="clear" class="btn btn-danger" onclick="location.reload();">Clear</button>
			        </div> 

			        </div>
			            
			        
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