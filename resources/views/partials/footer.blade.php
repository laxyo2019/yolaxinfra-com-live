
<div id="footer"> 
  
  <!--  Container -->
  <div class="container"> 
    
    <!-- About -->
    <div class="one-third column">
      <h5>About Us</h5>
      <p>Yolax Infranergy Private Limited is an ISO 9001:2015 and OHSAS 18001:2007 Certified Company. The company is professionally managed with involvement of highly qualified and experienced professionals in various field of operations in Industry and Infrastructure. Over the four decades of experience into various energy and other related operation &amp; maintenance services prompted us to venture into total Energy related consulting solutions separately.</p>
    </div>

    <!-- Useful Links -->
    <div class="one-third column">
      <h5>Useful Links</h5>
      <ul class="links-list">
        <li><a href="{{('/')}}">Home</a></li>
        <li><a href="{{url('/about')}}">About Us</a></li>
        <li><a href="{{url('/quality-policy')}}">Quality Policy</a></li>
        <li><a href="{{url('/clients')}}">Our Clients</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li>
        <li><a href="{{url('/careers')}}">Careers</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="one-third column">
      <h5>Contact Us</h5>
        <ul class="list-unstyled equal-height-list">
          <li><i class="fa fa-home"></i>
            {{ get_site_val('footer_ofc1_addr1') }}
          </li><br/>
          <li><i class="fa fa-phone"></i>
            {{ get_site_val('footer_ofc1_phone1') }}

            {{ get_site_val('footer_ofc1_phone2') }}
          </li> <br/>
        </ul>
      <div class="clearfix"></div>
    </div>
  </div>
  <!--  Container End --> 
  
</div>
<!-- Footer End --> 

<!--  Footer Copyright-->
<div id="footer-bottom"> 
  <!--  Container -->
  <div class="container">
    <div class="eight columns">
      <div id="copyright">© Copyright <?php echo date('Y'); ?> by <span><a href="http://www.yolaxinfra.com/">yolaxinfra.com</a></span>. All Rights Reserved.</div>
    </div>
    <div class="eight columns">

      <ul class="social-links">
        <li class="facebook"><a href="https://en-gb.facebook.com/people/Yolaxinfra-Energy/100014053607597">Facebook</a></li>
        <li class="twitter"><a href="https://twitter.com/Yolaxinfra">Twitter</a></li>
        <!-- <li class="twitter"><a href="https://twitter.com/YolaxinfraE">Twitter</a></li> -->
        <!-- <li class="youtube"><a href="#">YouTube</a></li>
        <li class="skype"><a href="#">Skype</a></li> -->
      </ul>
    </div>
  </div>
  <!-- End  Container --> 
</div>
<!--  Footer Copyright End --> 

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

<!-- Java Script
 ================================================== --> 

  <script type="text/javascript">
    $(document).ready(function(){
      $('#slider_logo').bxSlider({
      ticker: true,
      tickerSpeed: 5000,
      tickerHover: true
    });
    });
  </script>

</body>