@extends('layouts.front')
@section('title','Clients - Our Valuable Clients')
@section('content')

<!--  Page Title -->
<div id="page-title">

	<!--  Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h2>Clients</h2>
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
        <img src="{{asset('images/our_clients_banner.jpg')}}">  
    </div>
		<h4 class="headline">Our Valuable Clients</h4>
		<ul class="arrow_list">
            <li>M/S Indian Railway</li>
            <li>M/S Birla Corporation Ltd. (Unit - Chanderiya - Rajasthan &amp; Satna ・ MP</li>
            <li>M/S Gokul Refoils &amp; Solvent Ltd.</li>
            <li>M/S JK Cement Ltd. (Unit - Muddhol-Karnataka, Mangrol, Nimbahera, Rajasthan &amp; Jhahhar-Haryana)</li>
            <li>M/S Larsen &amp; Tourbo (L &amp; T) - ECC Division</li>
            <li>M/S Oriental Foundry Pvt. Ltd.</li>
            <li>M/S Ultra Tech Cement</li>
            <li>M/S Lakshya International School</li>
            <li>M/S Maa Gayatri Hospital</li>
            <li>M/S Transworld</li>
            <li>M/S Vasai Viral Municipal Corporation</li>
            <li>M/S Rajat Cement</li>
            <li>M/S Modern Petrofils</li>
            <li>M/S Mahle Engine Components India Pvt. Ltd.</li>
            <li>M/S Parakh Agro Industries Ltd.</li>
            <li>M/S Grasim Industries Ltd.</li>
            <li>M/S MP Beer Product Ltd.</li>
    </ul>
	</div>
	
	<!-- Sidebar Start -->	
	<div class="four columns">
		@include('partials.sidebar')
		
		 
<!-- Sidebar end -->	
</div>
<!--  Container End -->

</div>
<!-- End  Container -->

@endsection