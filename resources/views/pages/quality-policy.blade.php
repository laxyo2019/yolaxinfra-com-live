@extends('layouts.front')
@section('title','Quality Policy - Yolax Infranergy')
@section('content')
<!--  Page Title -->
<div id="page-title">

	<!--  Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h1>Quality Policy</h1>
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
			<img src="{{asset('/images/quality_poicy_banner.jpg')}}">  
		</div>
		<h4 class="headline">Our Quality Policy</h4>
		<p>At Yolax infranergy Pvt. Ltd. . we have established quality, environmental and safety policies that are consistent with our mission. These are in line with the specific requirements of ISO 9001:2015 Quality Management System.</p>
		<p>These policies are intended to direct Yolax Infra towards enhancing the quality of our undertakings and achieve excellence in health, safety and environmental performance. We review these policies periodically so as to ensure continuing stability.</p>
		<p>To manage our projects activities/services in an environmentally responsible and lawful manner, so that their environmental impact is reduced to a practicable minimum and that there is continual improvement in our environmental performance.</p>
		<h4 class="headline">Our Certifications</h4>
		<div class="eight columns">
			<img src="{{asset('images/YOLAX-INFRANERGY-PVT-ISO.jpg')}}" alt="Yolax-Infranergy-iso-certificate">
		</div>
		<div class="eight columns">
			<img src="{{asset('images/YOLAX-INFRANERGY-PVT-OHSAS.jpg')}}" alt="Yolax-Infranergy-ohsas-certificate">
		</div>
	</div>
<!-- Sidebar Start -->	
	<div class="four columns">
		@include('partials.sidebar')
	</div>	
<!-- Sidebar end -->		

<!--  Container End -->

</div>
<!-- End  Container -->
@endsection
