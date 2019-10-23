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
      <h1>DGPS, RTK Survey </h1>
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
        <img src="{{asset('images/drone_banner.jpg')}}">  
    </div>
    <h4 class="headline-main">DGPS Survey</h4>
    <p>DGPS stands for Dual frequency Global positioning system. This Instrument is basically designed for finding the actual ground positions in terms of Latitude and longitude. We combine the disciplines of surveying, mapping, and environmental consulting with cutting edge equipment like 3D Laser Scanning technology to tackle every stage of your project. DGPS provides improved location accuracy, from the 15- meter nominal GPS accuracy to about 10 cm in case of the best implementations.Our energy management resources are more than sufficient for projects dealing with transmission energy, wind energy, and solar energy plants. In addition, we provide comprehensive renewable energy services as well. With the Google earth technology, we are even more confident of the surveyed loops and topographical features.</p>

    <h4 class="headline">The DGPS Survey main features are</h4>
    <ul class="arrow_list">
        <li>Position is determined by distance from at least 4 satellites</li>
        <li>Time taken by signal to travel from satellite to antenna used to determine the distance.
        <li>The base station calculates the difference between the specified coordinates of its location and those indicated by the satellites.</li>
        <li>The base is continuously broadcasting a signal to the rover of this difference.</li>
        <li>The rover then uses this same difference to accurately determine it’s location.</li>
    </ul>
    <h4 class="headline">DGPS Advantages:</h4>
    <ul class="arrow_list">
      <li>Higher accuracy (+/-0.045m)</li>
      <li>Real time data</li>
      <li>Worldwide coverage</li>
      <li>3D survey results</li>
      <li>24 hours availability</li>
      <li>Not affected by cloud cover</li>
    </ul>

    <h4 class="headline">The following classes of relative positioning techniques can therefore be identified.</h4>
    <ul class="arrow_list">
      <li>Static and Kinematic GPS surveying techniques: High precision techniques based on post processing of carrier phase measurements</li>
      <li>Differential GPS (DGPS): instantaneous low to moderate accuracy positioning and mapping technique based on pseudo range measurements.</li>
      <li>Real – Time Kinematic (RTK): versatile high precision techniques that use carrier phase measurements in an instantaneous positioning mode.</li>
    </ul>
    <p>The DGPS &amp; RTK techniques, because they are able to deliver results in real time, are very powerful GPS positioning technologies.</p>
   
   

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

