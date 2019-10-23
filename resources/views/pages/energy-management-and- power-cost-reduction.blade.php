@extends('layouts.front')
@section('title','Yolax- Renewable Energy Consultants & Solar Power Consulting Firm - India')
@section('meta')
  <meta name="description" content="Yolax Infra group is a Solar Power Consulting Firm offering Renewable Energy Consultants, energy management consultants, solar energy consultants, solar power consultants and solar power cost reduction."/>

  <meta name="keywords" content="renewable energy consultants, renewable energy consultants in India, renewable energy companies in India, energy efficiency & renewable energy, energy management consultants, solar energy consultants, solar power consultants, solar power consulting firm, solar power cost reduction, spv solar power plant"/>
@endsection
@section('content')
<!--  Page Title -->
<div id="page-title">

  <!--  Container Start -->
  <div class="container">
    <div class="sixteen columns">
      <h1>Services</h1>
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
        <img src="{{asset('images/power-cost.jpg')}}" alt="Power_cost">  
    </div>

    <h2 class="headline-main">ENERGY MANAGEMENT & POWER COST REDUCTION </h2>

    <p>Power cost can be reduced for an organization by sourcing power through open access and by arriving at optimal mix of available energy resources making use of implied regulations. </p>

    <p>Yolax, dedicated team identifies and delivers solutions to reduce cost of energy by researching available resource and relevant policies of government. By understanding our clients requirements we align our advice and recommendations with their physical requirement and risk appetite. The whole concept starts from energy audit and investigate anomalies. </p>

    <p>The second step is energy mapping to drill down, individual operational aspects of your business process. After completion of audit and mapping feasibility report will be prepared, exploring specifics of our recommendations. Once the feasibility study is clear to the stakeholders , we will take up managing the project on requirement of client. </p>
 

    <h2 class="headline-main">Solar Energy Support- </h2>

    <p> Our solar energy consultants are providing services to support and catalyse planning and development of solar projects. With solid industry connections and an exhaustive comprehension of sun based arrangement. The services are including Business model development, Bankable detailed project report, Permits & approvals facilitation, Stakeholder selection, Off-take risk assessment & Hazop study. We also offer feasibility, planning, liaising and execution support as a turnkey Project Management Consulting (PMC) service.</p>


    <h2 class="headline-main" style="color: #8da046;">Renewable energy support- </h2>
    <p>We assist through our consulting services to our clients to make use of renewable energy sources, such as solar PV, biomass and wind. Through our associates who are experts in renewable energy resources, we provide services for consulting with a special focus on a solar PV and bio mass. Our expertise can help companies and entrepreneurs looking for strategic technical financial assistance for setting up renewable energy plant. </p>

    <p>We have a tie up with renowned manufacturers and service providers so, as to give comprehensive solutions in rooftop power system , designed for the industries, building and communities. </p>
 
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