@extends('layouts.front')
@section('title','Providing Detailed Complete Construction Management Consulting Services')
@section('meta') 
  <meta name="description" content="Yolax group of construction consultant’s team provides you with detailed analysis and designing services for building, bridges, highways, water treatment plants and railroads. "/>  
  <meta name="keywords" content=" construction consultants, hse consulting services, energy consultancy firms , rooftop solar and merger and acquisition"/> 
@endsection

@section('content')
<!--  Page Title -->
<div id="page-title">

  <!--  Container Start -->
  <div class="container">
    <div class="sixteen columns">
      <h1>Construction Consulting</h1>
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
              <img src="{{asset('images/construction_banner.jpg')}}">  
          </div>
    <h4 class="headline-main">Consulting for Construction </h4>
    <p>Our construction consultant’s team provides you with detailed analysis and designing services for building, bridges, highways, water treatment plants and railroads. Our team of experts works after complete detailed study and environmental factors for the project site. </p>

    <h5>Yolax Infra provides you with detailed complete construction management consulting services or depending upon the your requirements we provide consultancy services at any desired stage: </h5>
    <ul class="arrow_list">
        <li>Project scope management stage</li>
        <li>Project design stage</li> 
        <li>Quantity surveying</li>
        <li>Tendering Stage</li>
        <li>Contract management</li>
        <li>Construction stage</li>
        <li>Project closing stage</li>
    </ul>
    <p></p>
      <h5>Services we provide</h5> 
      <ul class="arrow_list">
        <li>PMC</li>
        <li>Contracts and cost management</li>
        <li>QA/QC</li>
        <li>Construction Project Management consultancy (CPMC)</li>
      </ul>   
    <p></p>
    <h4 class="headline">PMC (Project Management Consulting)</h4>
    <p>Project management is a one time activity for an organisation which need to have understanding different skills sets and temperament which are not required for a normal day to day business. Therefore, it is generally outsourced to an projects management organisation who has the experience and the manpower available for immediate deployment. Execution of projects is done by our team in a total professional way with all MIS system and reporting to the project owner in a systematic way.</p>
    <p>We have a team of qualified and experienced engineers and project managers who can  be deployed at any projects within a period of  one month time from the date of LOI. Our team has expertise on civil, utility and electrical (HT/LT) disciplines. They have an experience on carrying out textiles industry, Schools, hospitals, paper industry and chemical and other process industry.</p>
    <p>Our services will give you the benefits of on time completion of projects  within cost and with quality.</p>

  </div>
  
<!-- Sidebar Start -->  
 <div class="four columns">
   @include('partials.sidebar')
</div>
<!-- Sidebar End -->

<!--  Container End -->

</div>
<!-- End  Container -->
@endsection
