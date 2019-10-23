@extends('layouts.front')
@section('title', 'About - Yolax Infranergy')
@section('content')
<!--  Page Title -->
<div id="page-title">

	<!--  Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h1>About</h1>
		</div>
	</div>
	<!--  Container End -->
	
</div>
<!-- Page Title End -->

<!--  Container -->
<div class="container">

	<!-- Standard Structure -->
	<div class="twelve columns">
	<!-- Large Notice Image -->
		<div class="sixteen colomns page-image">
              <img src="{{asset('/images/about.jpg')}}">  
        </div>
        <div class="sixteen colomns">
        	<h4 class="headline">Company History</h4>
		
		<p>Yolax Infranergy Private Limited is an ISO 9001:2015 and OHSAS 18001:2007 Certified Company. The company is professionally managed with involvement of highly qualified and experienced professionals in various field of operations in Industry and Infrastructure.</p>

	    <p>YOLAX incorporated in May 2014 is comparatively new in consultancy services but the work culture and its strong base of competent and experienced team has gained wide acceptability. The present spheres of activities are:</p>

		<h4 class="headline">Our Portfolio</h4>
		<p>We provide technically feasible and commercially viable Solutions to our valuable customers for achievement of most economical energy cost and green energy management initiatives:</p>



		<ul class="arrow_list">
	        <li><h5>Railway Consultancy</h5></li>
	    </ul>
		<ul class="minus_list" style="padding-left: 15px">
	        <li>FSR- Feasibility Study Report</li>
	        <li>In Principle Rail Traffic Clearance</li>
	        <li>Survey for Construction Plan</li>
	        <li>DPR- Detailed Project Report</li>
	        <li>ESP- Engineering Scale Plan</li>
	        <li>OHE- Overhead Electrification</li>
	        <li>Signaling and Telecommunication</li>
	    </ul>

	    <ul class="arrow_list">
	    	<li><h5>Project Management Consultancy (Construction Supervision)</h5></li>
	    </ul>

	    <ul class="arrow_list">
	    	<li><h5>Survey Work</h5></li>
	    </ul>
	    <ul class="minus_list" style="padding-left: 15px">
	        <li>Drone /UAV Survey</li>
	        <li>Topographical Survey</li>
	        <li>Drone LiDAR Survey</li>
	        <li>Infrastructure Survey</li>
	        <li>Green Energy Survey</li>
	        <li>Renewable energy Survey</li>
	        <li>Smart City Survey</li>
	        <li>Agriculture Survey</li>
	        <li>Repairs and Customization (Drone)</li>
	    </ul>

	    <ul class="arrow_list">
	    	<li><h5>Energy Sector</h5></li>
	    </ul>
	    <ul class="minus_list" style="padding-left: 15px">
	        <li>Energy Audit Services</li>
	        <li>Energy Efficiency Consultancy</li>
	        <li>Green Building Consultancy</li>
	        <li>Solar Power Consultancy</li>
	        <li>Power Cost Reduction</li>
	       <!--  <li></li>
	        <li>Maintenance and Management Audit</li>
	        <li>Captive Power Plant</li>
	        <li>Third party Construction</li>
	        <li>School Consultancy Services</li> -->
	    </ul>


	    <ul class="arrow_list">
	    	<li><h5>Health Safety Environment</h5></li>
	    </ul>

	    <ul class="arrow_list">
	    	<li><h5>Maintenance and Management Audit</h5></li>
	    </ul>

	    <ul class="arrow_list">
	    	<li><h5>Captive Power Plant</h5></li>
	    </ul>

		<ul class="arrow_list">
	    	<li><h5>Third party Construction</h5></li>
	    </ul>

		<ul class="arrow_list">
	    	<li><h5>School Consultancy Services</h5></li>
	    </ul>
        	<ul class="minus_list" style="padding-left: 15px">
	    		<li>School Planning/Construction Assistance/PMC</li>
				<li>Affiliation/Legal Assistance</li>
				<li>Marketing and Business development</li>
				<li>Recruitment and Selection procedure</li>
				<li>Management System Consulting </li>
				<li>Value Added Product strategies</li>
				 
			</ul>
		
        </div>
	</div>
	
	<!-- Sidebar Start -->	
	<div class="four columns">
		@include('partials.sidebar')
	</div>	
	<!-- Sidebar end -->		

	</div>
	<!--  Container End -->
@endsection
	