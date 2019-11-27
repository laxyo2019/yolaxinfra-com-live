 <!-- Header -->
 <div class="top-bar">
  <div class="container">
    <div class="col-md-4 contact-bar-l">
        <span class="details">
          <span><strong>Phone</strong> :
           {{ get_site_val('topnav_phone1') }}
         </span>
        </span>
    </div>
    <div class="col-md-8 contact-bar-r">
      <div class="col-md-10">
          {{-- <span class="phone"><strong>Email</strong> : <a class="headeremailtext" href="mailto:info@yolaxinfra.com">{{ get_site_val('topnav_email') }}
          </a></span> | &nbsp;  --}}
        <span>
          <strong>Follow Us : </strong>&nbsp;
          <ul class="social-links">
            <li class="facebook"><a href="https://en-gb.facebook.com/people/Yolaxinfra-Energy/100014053607597"></a></li>
            <li class="twitter"><a href="https://twitter.com/YolaxinfraE"></a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/in/yolax-infranergy-8a3056132"></a></li>
          </ul> 
        </span>
      </div>
    </div>
  </div>
</div>
<div id="header">
  <!--  Container Start-->
  <!--Madhusudan--> 
  
  <!--=== Header v6 ===-->
  <div class="header-v6 header-transparent header-dark-dropdown header-sticky"> 
    <!-- Navbar -->
    <div class="navbar mega-menu menu_section_top" role="navigation">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-container"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        {{-- </button> --}}
        
          <!-- Navbar Brand -->
          <div class="navbar-brand"> <a href="http://www.yolaxinfra.com/"> <img class="default-logo" src="{{ asset('images/logo.png') }}"alt="Logo mkmkmk"> </a> 
          </div>
          <!-- ENd Navbar Brand --> 
                
          <!-- Header Inner Right --> 
                
          <!-- End Header Inner Right --> 
        </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
              <div class="menu-container">
                <ul class="nav navbar-nav item">
                  <!-- Home -->
                  <li><a href="{{('/')}}">Home</a></li>
                  <!-- End Home --> 
                  <!-- About us -->
                  <li><a href="{{url('/about')}}">About Us</a></li>
                  <!-- End Pages --> 
                  <!-- Services -->
                  <li class="dropdown mega-menu-fullwidth dropbtn" style="position: relative;" > <a href="{{('/')}}" class="dropdown-toggle"  onclick="myFunction()" data-toggle="dropdown"> Services <i class="fa fa-chevron-circle-down"></i></a>
                    <ul class="dropdown-menu items dropdown-content" id="myDropdown" style="position: absolute;">
                      <li>
                        <div class="mega-menu-content disable-icons">
                          <div class="container">
                            <div class="equal-height">
                              <div class="col-md-3 equal-height-in">
                                <ul class="list-unstyled equal-height-list">
                                  <li>
                                    <h3><a href="{{url('/railway-consultancy')}}">Railway Consultancy</a></h3>
                                  </li>
                                  
                                  <!-- Typography -->
                                  <li><a href="{{url('/feasibility-study-report')}}"><i class="fa fa-chevron-circle-right"></i> FSR &ndash; Feasibility Study Report</a></li>

                                  <li><a href="{{url('/rail-traffic-clearance')}}"><i class="fa fa-chevron-circle-right"></i> In principal / RTC (Rail traffic clearance)</a></li>

                                  <li><a href="{{url('/survey-construction-plan')}}"><i class="fa fa-chevron-circle-right"></i> Survey Construction</a></li>

                                  <li><a href="{{url('/detailed-project-report')}}"><i class="fa fa-chevron-circle-right"></i> DPR (Detailed Project Report)</a></li>

                                  <li><a href="{{url('/engineering-scale-plan')}}"><i class="fa fa-chevron-circle-right"></i> ESP (Engineering Scale Plan)</a></li>

                                  <li><a href="{{url('/overhead-electrification')}}"><i class="fa fa-chevron-circle-right"></i> OHE (Overhead Electrification)</a></li>

                                  <li><a href="{{url('/signaling-telecommunication')}}"><i class="fa fa-chevron-circle-right"></i> Signaling &amp; Tele-Communication</a></li>

                                  <li><a href="{{url('/construction-supervision')}}"><i class="fa fa-chevron-circle-right"></i> PMC / Construction Supervision</a></li>
                                 <!-- End Typography --> 
                                </ul>
                              </div>

                              <div class="col-md-3 equal-height-in" id="survey">
                                <ul class="list-unstyled equal-height-list"> 
                                  <li>
                                  <h3><a href="{{url('/3d-mapping-survey')}}">Survey</a></h3></li>

                                  <li><a href="{{url('/drone-uav-survey')}}"><i class="fa fa-chevron-circle-right"></i> Drone, UAV Survey</a></li>

                                  <li><a href="{{url('/topographical-survey')}}"><i class="fa fa-chevron-circle-right"></i> Topographical Survey</a></li>

                                  <li><a href="{{url('/drone-lidar-survey')}}"><i class="fa fa-chevron-circle-right"></i> Drone LiDAR Survey</a></li>
                                  
                                  <li><a href="{{url('/infrastructure-survey')}}"><i class="fa fa-chevron-circle-right"></i> Infrastructure survey</a></li>

                                  <li><a href="{{url('/renewable-energy-survey')}}"><i class="fa fa-chevron-circle-right"></i> Renewable Energy Survey</a></li>

                                  <li><a href="{{url('/smart-city-survey')}}"><i class="fa fa-chevron-circle-right"></i> Smart City Survey</a></li>

                                  <li><a href="{{url('/agriculture-survey')}}"><i class="fa fa-chevron-circle-right"></i> Agriculture Survey</a></li>

                                  <li><a href="{{url('/repair-customization')}}">
                                    <i class="fa fa-chevron-circle-right"></i>Repair and Customization
                                  </a></li>

                                  <li><a href="{{url('/echosounder')}}">
                                    <i class="fa fa-chevron-circle-right"></i>EchoSounder
                                  </a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 equal-height-in con">
                                <ul class="list-unstyled equal-height-list">
                                  <li>
                                    <h3>
                                      <a href="{{url('/energy-efficiency-and-power-consultancy')}}">Energy Consultancy</a>
                                    </h3>
                                  </li>

                                  <li><a href="{{url('/energy-audit-service')}}"><i class="fa fa-chevron-circle-right"></i>Energy Audit Service 
                                    </a></li>

                                  <li><a href="{{url('/energy-efficiency-consultancy')}}"><i class="fa fa-chevron-circle-right"></i> Energy Efficiency Consultancy</a></li>

                                  <li><a href="{{url('/green-building-consultancy')}}"><i class="fa fa-chevron-circle-right"></i> Green Building Consultancy</a></li>

                                  <li><a href="{{url('/solar-power-consultancy')}}"><i class="fa fa-chevron-circle-right"></i> Solar Power Consultancy</a></li>

                                  <li><a href="{{url('/power-cost-reduction')}}"><i class="fa fa-chevron-circle-right"></i> Power Cost Reduction</a></li>
                                
                                  <li>
                                    <h3>
                                        <a href="{{url('/health-safety-and-environment')}}">Health, Safety and Environment</a>
                                    </h3>
                                  </li>
                                  <li>
                                    <h3>
                                       <a href="{{url('/maintenance-management-audit')}}">Maintenance Management Audit-</a>
                                    </h3>
                                  </li>

                                  <li>
                                    <h3>
                                      <a href="{{url('/captive-power-plant')}}">Captive Power Plant</a>
                                    </h3>
                                  </li>

                                  <li>
                                    <h3>
                                      <a href="{{url('/third-party-construction-audit')}}">Third Party Construction Audit</a>
                                    </h3>
                                  </li>                             
                                </ul>
                              </div>

                              <div class="col-md-3 equal-height-in">
                                <ul class="list-unstyled equal-height-list">
                                  <li>
                                    <h3><a href="{{url('/school-education-consulting')}}">School Consultancy</a></h3>
                                  </li>
                                  <!-- Common Elements -->
                                  <li><a href="{{url('/school-planning-construction-assistance')}}"><i class="fa fa-chevron-circle-right"></i> School Planning/Construction Assistance/PMC</a></li>

                                  <li><a href="{{url('/affiliation-Legal-assistance')}}"><i class="fa fa-chevron-circle-right"></i> Affiliation/Legal Assistance</a></li>

                                  <li><a href="{{url("/Marketing&business-development")}}"><i class="fa fa-chevron-circle-right"></i> Marketing and Business development</a></li>

                                  <li><a href="{{url('/recruitment&selection-procedure')}}"><i class="fa fa-chevron-circle-right"></i> Recruitment and Selection procedure</a></li>

                                  <li><a href="{{url('/management-system-consulting')}}"><i class="fa fa-chevron-circle-right"></i> Management System Consulting</a></li>

                                  <li><a href="{{url('/value-added-product-strategies')}}"><i class="fa fa-chevron-circle-right"></i> Value Added Product strategiesg</a></li>
                              
                                </ul>
                              </div>

                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li> <a href="{{url('/quality-policy')}}">Quality Policy</a> </li>
                  <li> <a href="{{url('/clients')}}">Clients</a> </li>
                  <li> <a href="{{url('/contact')}}">Contact</a> </li>
                  <li> <a href="{{url('/careers')}}">Careers</a> </li>
                </ul>
              </div>
            </div>
            <!--/navbar-collapse--> 
          </div>
        </div>
        <!-- End Navbar --> 
      </div>
      <!--=== End Header v6 ===--> 
      <!--Madhusudan--> 
      <!--  Container End -->
</div>
    <!-- End Header -->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle('fadeIn');
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>