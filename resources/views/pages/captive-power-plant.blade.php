@extends('layouts.front')
@section('title','Yolax Infra service provides range of services related to captive power plants| Captive power plant.')
@section('meta')  
  <meta name="description" content="Yolax infra captive power plants consulting services for different industries. Offering quality project management and procurement services."/>    
  <meta name="keywords" content="green building consultants, solar power consultants, power plant consultants in India, operation and maintenance of power plant, solar energy consultant, solar power consultants, solar power consultancy, solar consulting services, SPV power plants, project commissioning, Ash handling plant,  solar power consultancy firm, solar consulting services"/>
@endsection
@section('content')
<!--  Page Title -->
<div id="page-title">

  <!--  Container Start -->
  <div class="container">
    <div class="sixteen columns">
      <h1>Power Plant Consulting</h1>
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
        <img src="{{asset('/images/captive.jpg')}}">  
    </div>

    <h4 class="headline-main">Captive Power Plant</h4>
    <p>The parent company of Yolax i.e, laxyo energy ltd, Is already in to operation and maintenance of captive power plants for decades. This experience has given us an edge of going in to quality and design details of captive power plants. The experience of O&amp;M and the experts associated with the group gives us added advantage of more precise execution and monitoring of projects under erection. Yolax infra energy operates the following areas,</p>

    <p></p>
    <strong>We normally operate as the owner consultant in the following activities,</strong>
    <p></p>
    <ul class="arrow_list">
        <li>Detailed discussions with the suppliers.</li>
        <li>Going into engineering details for confirming to the owners. </li>
        <li>Project management consultant ( PMC) </li>
    </ul>
    <p></p>
    <h5>Project start up and procurement assistance</h5>
    <p>Basis engineering, checking of design calculations and drawing , checking enquiry specifications, analysis of technical bid , review of drawing supplied by vendor, ascertaining vendor pre qualification, techno commercial bid evaluation, recommendation for purchases, negotiations and finalization for purchase orders.</p>

    <h5>Project management co-ordination</h5>
    <p>Project planning scheduling and control, communication management, contract administration, liaison with statutory authorities.</p>

    <h5>Inspection and expediting</h5>
    <p>Vendor appraisal, stage wise inspection, final inspection and expediting deliveries. Construction super visions, Super vision, certification, safety management, and co-ordination of sight activities. </p>

     <h5>Commissioning Supervision</h5>
    <p>Start up and commissioning assistance, witnessing site performance test, O&amp;M manual preparation expediting and finalization of as built.</p>
 
  </div>
  
 <!-- Sidebar Start -->  
  <div class="four columns">
    
    <!-- services sidebar start-->
  @include('partials.sidebar')
      
<!-- Sidebar end -->  
</div>
<!--  Container End -->

</div>
<!-- End  Container -->
@endsection