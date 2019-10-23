@extends('layouts.front')
@section('title','Energy Conservation Consultants, Top Energy Consulting Firms, Energy Efficiency Consulting Companies')
@section('meta')

  <meta name="description" content="Yolax infra energy is a top energy consulting firm having professional energy conservation consultants and sustainability solution with energy efficiency services and integrated consulting solutions."/>   

  <meta name="keywords" content="energy efficiency services India, energy auditing firms in India, energy efficiency consulting companies, energy conservation consultants, top energy consulting firms, energy efficiency and power consultancy, energy efficiency consulting companies"/>
@endsection
@section('content')
<!--  Page Title -->
<div id="page-title">

  <!--  Container Start -->
  <div class="container">
    <div class="sixteen columns">
      <h1>Energy Efficiency Consulting</h1>
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
        <img src="{{asset('images/energy_efficiency_banner.jpg')}}" alt="Energy-efficiency">  
    </div>

    <!-- ========================================================== -->
        <div class="service-block">
            <div id="Service">
                <div class="row in-short">
                    <div class="">
                        <h5>Energy Audit Service</h5>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                            <img src="images/energy-audit( 360x 240).jpg">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p>Energy today has turned into a key factor in choosing the item cost at small scale level and in addition in managing the inflation and the debt burden at the full scale level. Energy audit is the most cost effective way to reduce energy costs. Energy cost is a significant factor in economic activity in monetary action at standard with variables of ... </p>
                            <a href="{{url('energy-audit-service')}}">
                                <button>Read More</button>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                            <img src="{{asset('images/energy-audit( 360x 240).jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row in-short">
                    <div class="">
                        <h5>Energy Efficiency consultancy</h5>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <img src="{{asset('images/energy-efficiency( 360x240).jpg')}}">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p>Energy Efficiency Consultancy Service is that are extremely helpful in conserving the natural resources and increasing the reliability & profitability of the business. Energy auditing services are vastly helpful in reducing the carbon foot prints, by implementing energy conservation measures. Energy audit services are provided at reasonable rates...</p>
                            <a href="{{url('energy-efficiency-consultancy')}}">
                                <button>Read More</button>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>



                <div class="row in-short">
                    <div class="">
                        <h5>Green Building Consultancy</h5>
                        
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                            <img src="{{asset('images/green-building-consultancy(360x240).jpg')}}">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p>Yolax Infranergy Pvt Ltd is one of the leading Green Building Consultancy companies in India offers a wide array of Green Energy Services which include developing new green building rating programmes and green building design to save money, increase comfort and create healthier environments for people to live and work, using improved indoor air quality, natural daylight, and thermal comfort. Green building ...</p>
                            <a href="{{url('green-building-consultancy')}}">
                                <button>Read More</button>
                            </a>
                        </div>

                        
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                            <img src="{{asset('images/green-building-consultancy(360x240).jpg')}}">
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="row in-short">
                    <div class="">
                        <h5>Solar Power Consultancy</h5>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <img src="{{asset('images/solar-power-consultancy(360x240).jpg')}}">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p>Yolax Infranergy Pvt Ltd provides sustainable energy solutions and services to serve the household and businesses sector. We are also working with Rooftop solar projects which is a well known phenomenon now days. We offer consulting regarding the supply of solar technology to the rural poor and also procurement support. Yolax helps in providing Solar ...</p>
                            <a href="{{url('solar-power-consultancy')}}">
                                <button>Read More</button>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="row in-short">
                    <div class="">
                        <h5>Power Cost Reduction</h5>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                            <img src="{{asset('images/power-cost-reduction(360x240).jpg')}}">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p> Power cost can be reduced for an organization by sourcing power through open access and by arriving at optimal mix of available energy resources making use of implied regulations.
                            </p>
                            <p>
                                We, at Yolax are an independent cost consultancy with over 20 years experience in advising clients on how to get the best value for money from suppliers. We Can Help Reduce your Utility Costs By: 
                            </p>
                            <a href="{{url('power-cost-reduction')}}">
                                <button>Read More</button>
                            </a>
                        </div>
                        
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                            <img src="{{asset('images/power-cost-reduction(360x240).jpg')}}">
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>


                
            </div>
        </div>
    

  </div>
  
  <!-- Sidebar Start -->  
  <div class="four columns">
    <!-- services sidebar start-->
    @include('partials.sidebar')
    <!-- services sidebar end -->
    
<!-- Sidebar end -->  
</div>
<!--  Container End -->

</div>
<!-- End  Container -->
@endsection