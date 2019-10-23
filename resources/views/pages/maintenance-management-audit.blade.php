@extends('layouts.front')
@section('title','Yolax Infra offers specialized services for maintenance management consultants for different plants.')
@section('meta') 
    <meta name="description" content="Yolax has established operation and maintenance management of solar power plant consulting for the clients and helps them to focus on the risks and take care of preliminary audit and final audit of maintenance system"/>  
    <meta name="keywords" content="operation and maintenance of solar power plant, operation and maintenance of power plant, health safety and environment, O & M services for solar Power Plants, audit management, environmental consulting firms , energy audit services "/>  
@endsection
@section('content')
<!--  Page Title -->
<div id="page-title">

  <!--  Container Start -->
  <div class="container">
    <div class="sixteen columns">
      <h1>Maintenance Consulting</h1>
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
        <img src="{{asset('images/maintanence-management.jpg')}}">  
    </div>

    <h4 class="headline-main">Maintenance Management Audit</h4>
    <ul class="arrow_list">
      <li>Good maintenance practises will improve reliability of equipments and will reduce manufacturing and maintenance costs.</li> 
      <li>Good maintenance will reduce energy consumptions.</li>
      <li>Good maintenance practices will provide faster deliveries to the customers. </li> 
    </ul>
    <p></p>
    <p>Yolax has established maintenance management consulting for the clients which will take care of preliminary audit and final audit of maintenance system of the plant and than physically verifying the same. </p>

    <p>Professionals from various industry having experience of  20- 40 years in the Industry have been aligned to work in light process industry, paper and pulp, cement food and textile industry maintenance audit. </p>
  </div>
  
 <!-- Sidebar Start -->  
  <div class="four columns">
    
    <!-- services sidebar start-->
@include('partials.sidebar')
    
    <!-- services sidebar end -->
    
    <!-- Large Notice Image -->
      
<!-- Sidebar end -->  
</div>
<!--  Container End -->

</div>
<!-- End  Container -->
@endsection