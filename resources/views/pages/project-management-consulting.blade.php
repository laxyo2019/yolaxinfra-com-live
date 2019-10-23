@extends('layouts.front')
@section('title','Services - Project Management Consulting')

@section('content')
<!--  Page Title -->
<div id="page-title">

  <!--  Container Start -->
  <div class="container">
    <div class="sixteen columns">
      <h2>Services</h2>
    </div>
  </div>
  <!--  Container End -->
  
</div>
<!-- Page Title End -->

<!--  Container -->
<div class="container">

  <!-- Standard Structure -->
  <div class="eleven columns">
    <h4 class="headline">Project Management Consulting</h4>
    <p>Time is the essence of every successful journey. It is the most sought after commodity in to days world. Competition is global. To stay ahead in the competition one has to think ahead of the what is currently being done. One has to set new bench marks and new goals every time. To stay ahead of time you may need short term partner to help achieve the goals.</p>

    <p>We have a team of qualified and experienced engineers and project managers who can  be deployed at any projects within a period of  one month time from the date of LOI. Our team has expertise on civil, utility and electrical (HT/LT) disciplines. They have an experience on carrying out textiles industry, Schools, hospitals, paper industry and chemical and other process industry.</p>

    <p>Our services will give you the benefits of on time completion of projects  within cost and with quality.</p>
  </div>
  
  <!-- Sidebar Start -->  
  <div class="five columns">
   @include('partials.sidebar')
    
    <!-- services sidebar end -->
    
    <!-- Large Notice Image -->
      <p>
          <div class="large-notice">
              <img src="{{asset('images/project-mangement.jpg')}}">  
          </div>
      </p>
  
<!-- Sidebar end -->  
</div>
<!--  Container End -->

</div>
<!-- End  Container -->
@endsection