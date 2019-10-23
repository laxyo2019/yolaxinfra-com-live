@extends('layouts.front')
@section('title','Yolax- Drone, UAV Survey, Energy Efficiency, Railway Approvals, Environment Safety and Education Consulting Solution')
@section('meta')
    <meta name="description" content="Yolax infra energy provides service for Drone, UAV Survey and various energy consulting, education, operation and maintenance, PMC services, railway consultancy services. Providing sustainable renewable energy solution to enable to users meets their energy and environmental requirements."/>    
   
    <meta name="keywords" content="Drone, UAV Survey, Energy Consultants, railway consultancy, health and safety consultants, renewable resource consultants, hse consulting firms, environment consultancy, energy consulting firms, power consultancy, construction and PMC consulting services."/> 
@endsection
@section('content')
<!-- Slider -->
<div id="slider"> 
  
  <!-- Flexslider Start-->
  <div class="flexslider">
    <ul class="slides">
      <!-- Slide -->
      <li class="custom-slide yolaxinfraenergysliderimage"></li>
      
      <!-- Slide -->
      <li class="custom-slide railwaysilderimage">
        <div class="container">
          <div class="sixteen columns">
            <div class="slider_description railwaysilderdd">
              <h2>Railway Consultancy</h2>
              <p>We are railway approved consultants for all railway related work including liaison services across India.</p>
            </div>
          </div>
        </div>
      </li>

      <!-- Slide -->
      <li class="custom-slide naturesliderimage" >
        <div class="container">
          <div class="sixteen columns">
            <div class="slider_description">
              <h2>Energy, Power, Safety <br/>Environment Consultancy</h2>
              <p>Implementation of recommended energy conservation </br>measures and post implementation services for monitoring </br>and verification.</p>
            </div>
          </div>
        </div>
      </li>
      
      <!-- Slide
      <li class="custom-slide" style=" background:url(images/Banner_12.jpg); background-size:cover">
        <div class="container">
          <div class="sixteen columns"> 
           
            <div class="slider_description" style="background: url(images/google_bg2.png);">
              <h2>Solar &amp; Renewable Consultancy</h2>
              <p>Curabitur bibendum ultricies nisi id <br/>
                vestibulum. Duis ac lacus enim, <br/>et rutrum libero.</p>
            </div>
          </div>
        </div>
      </li> -->

      <!-- Slide -->
      <li class="custom-slide Schoolsilderimage">
        <div class="container">
          <div class="sixteen columns"> 
            <!-- <img src="images/slider_img_01.png" alt="" style="float: right;" /> -->
            <div class="slider_description" >
              <h2>School Education Consulting</h2>
              <p>We have a team of dedicated persons who are in the field of education as well as administration.</p>
              <!-- <a href="#" class="button medium yellow">Purchase Now</a> --> </div>
          </div>
        </div>
      </li>

    </ul>
  </div>
  <!-- Flexslider End-->  
</div>
<!-- End Slider --> 

<!--  Container Start -->
<div class="container">  
  <!-- Icon Box Start -->
  <div class="features">  
    <!-- Icon Box Start -->
    <div class="one-third column">
      <div class="feature">
        <div class="feature-circle">
            <img src="{{asset('images/Mission.png')}}" alt="mission">   
        </div>
        <div class="feature-description">
          <h4>Mission</h4>
          <p>We exist to empower business houses to focus on their core business and making profits.</p>
        </div>
      </div>
    </div>
    <!-- Icon Box End --> 
    
    <!-- Icon Box Start -->
    <div class="one-third column">
      <div class="feature">
        <div class="feature-circle">
            <img src="{{asset('images/Vision.png')}}" alt="vision">   
        </div>
        <div class="feature-description">
          <h4>Vision</h4>
          <p>To create an organisation which takes care of better future for our employees, our customers, our community and other stack holders.</p>
        </div>
      </div>
    </div>
    <!-- Icon Box End --> 
    
    <!-- Icon Box Start -->
    <div class="one-third column">
      <div class="feature">
        <div class="feature-circle">
          <img src="{{asset('images/Value.png')}}" alt="value">
        </div>
        <div class="feature-description">
          <h4>Values</h4>
          <p>Integrity,compassion,learning and values driven.</p>
        </div>
      </div>
    </div>
    <!-- Icon Box End -->    
  </div>
  <!-- Icon Box End -->
  </div>
  <!-- container End -->

  <div class="clearfix"></div>
  <!--  Container Start -->
<div class="about">
    <div class="container">
        <div class="eight columns">
            <div class="about-image">
              <img src="{{asset('images/yolax-about.png')}}" alt="yolax-about">  
            </div>
        </div>
        <div class="eight columns">
            <h1 class="headline">Welcome! to Yolax Infranergy</h1>
            
      <p>Yolax Infranergy Private Limited is an ISO 9001:2015 and OHSAS 18001:2007 Certified Company. The company is professionally managed with involvement of highly qualified and experienced professionals in various field of operations in Industry and Infrastructure.</p>

      <p>Over the four decades of experience into various energy and other related operation &amp; maintenance services prompted us to venture into total Energy related consulting solutions separately.</p>

            <a class="button medium green" href="about.php">Read More</a>
        </div>
    </div>
</div>
<!--  Container End -->
  <div class="clearfix"></div>
  
  <div class="container">
  <div class="sixteen colomns">
        <div class="col-md-12">
            <h4 class="headline">Our Services</h4>
         </div>
    </div>
    <div class="container">
      <section class="slider">
       <div class="box-shadow">
         <div class="" id="owlslider">
       
          <div class="item active">
            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/railway-consultancy.jpg')}}" alt="railway-consultancy"/>
                  <div class="portfolio-item-meta">
                      <h5><a href="{{url('railway-consultancy')}}">Railway Consultancy</a></h5>
                      <p>Yolax Infra energy is India based railway contracting service providing company.</p>
                  </div>
                </div>
              </div>
            </div>

            

            <!--  -->
             <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/drone-survey.jpg')}}" alt="drone-survey"/>
                  <div class="portfolio-item-meta">
                      <h5><a href="{{url('3d-mapping-survey')}}">Survey</a></h5>
                      <p>Service providers of land surveying, aerial surveying, marine surveying and all types of aerial photography and videography.</p>
                  </div>
                </div>
              </div>
            </div>
            <!--  -->
            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/Energy.jpg')}}" alt="Energy"/>
                  <div class="portfolio-item-meta">
                      <h5><a href="{{url('energy-efficiency-and-power-consultancy')}}">Energy Consultancy</a></h5>
                      <p>Yolax infra energy PVT. Ltd, an energy solutions vertical to provide services.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/Health_Safety_Environment.jpg')}}" alt="Health-Safety-Environment"/>
                  <div class="portfolio-item-meta">
                      <h5><a href="{{url('health-safety-and-environment')}}">Health, Safety &amp; Environment</a></h5>
                      <p>Safety and health of people and the resources are organization.</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <div class="item">
            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/maintainence.jpg')}}" alt="maintainence"/>
                  <div class="portfolio-item-meta">
                      <h5><a href="{{url('maintenance-management-audit')}}">Maintenance Management Audit</a></h5>
                      <p>Good maintenance practises will improve reliability of equipments.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/PowerPlant.jpg')}}" alt="PowerPlant"/>
                  <div class="portfolio-item-meta">
                      <h5><a href="{{url('captive-power-plant')}}">Captive Power Plant</a></h5>
                      <p>Yolax is in to operation and maintenance of captive power plants for decades.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/energy-cost.jpg')}}" alt="energy-cost"/>
                  <div class="portfolio-item-meta">
                      <!-- <h5><a href="power-cost-reduction.php">Power Cost Reduction</a></h5> -->
                      <h5><a href="{{url('energy-management-and-power-cost-reduction')}}">Third Party Construction Audit</a></h5>
                      <p>We provide with professional construction supervision, specifically tailored to safeguard the successful completion of your project</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="four columns">
              <div class="col-item">
                <div class="info">
                  <img class="image-responsive" src="{{asset('images/school-consulting.jpg')}}" alt="chool-consulting"/>
                  <div class="portfolio-item-meta">
                      <!-- <h5><a href="education-consulting.php">Education Consulting</a></h5> -->
                      <h5><a href="{{('school-education-consulting')}}">School Consultancy</a></h5>
                      <p>Time is the essence of every successful journey. It is the most sought world.</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

        </div>
      </div> 
    </section>
  </div>
</div>
<div class="container">  
  <!-- Our Clients -->
  <div class="sixteen columns">
    <h4 class="headline">Our Clients</h4>
  </div>
  <div class="sixteen columns">
  <!-- slider -->
    <div class="slider-container">
      <ul id="slider_logo">
        <li><a href="#"><img src="{{asset('images/logos/adani.jpg')}}" alt="adani"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/bil.jpg')}}" alt="bil"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/essar.jpg')}}" alt="essar"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/Destimoney.jpg')}}" alt="Destimoney"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/aditya-birla-chemical-division.jpg')}}" alt="aditya-birla-chemical-division"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/indian-railway.jpg')}}" alt="indian-railway"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/Bengaluru-international-airport.jpg')}}" alt="Bengaluru-international-airport"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/larsen-and-toubro.jpg')}}" alt="larsen-and-toubro"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/aditya-birla-group.jpg')}}" alt="aditya-birla-group"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/binani.jpg')}}" alt="binani"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/jindal-steel-and-power-limited.jpg')}}" alt="jindal-steel-and-power-limited"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/RSWM-Limited.jpg')}}" alt="RSWM-Limited"></a></li>
          <li><a href="#"><img src="{{asset('images/logos/Coastal-projects-limited.jpg')}}" alt="Coastal-projects-limited"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/BGR_ENERGY.jpg')}}" alt="BGR_ENERGY"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/Bilwara-Group.jpg')}}" alt="Bilwara-Group"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/nitin-spinners-limited.jpg')}}" alt="nitin-spinners-limited"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/KSK-Energy-Ventures-Limited.jpg')}}" alt="KSK-Energy-Ventures-Limited"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/JK-Cement.jpg')}}" alt="JK-Cement"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/modern-petrofils.jpg')}}" alt="modern-petrofils"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/parakh-agro-industries-limited.jpg')}}" alt="parakh-agro-industries-limited"></a></li>
        <li><a href="#"><img src="{{asset('images/logos/mahle-engine-components.jpg')}}" alt="mahle-engine-components"></a></li>


      </ul>
    </div>
</div>
  <!-- Our Clients End -->  
</div>
<!--  Container End --> 

<script>
  $(window).on('load',function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5
  });
      $("#owlslider").owlCarousel({
             navigation : false,
              paginationSpeed : 400,
              singleItem:true,
              autoPlay: 4000,
              stopOnHover : true  ,
         });
});
</script>
@endsection