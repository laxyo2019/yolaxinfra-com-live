<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.bxSlider.js') }}"></script>

    <script src="{{ asset('js/flexslider.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    
    <!-- Fonts -->


  <!-- Styles-->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css"  href="{{asset('css/header-v6.css')}}">
  <link rel="stylesheet" type="text/css"  href="{{asset('css/bxlogo.css')}}">
  <link rel="stylesheet" type="text/css"  href="{{asset('css/mystyle.css')}}">
  <link rel="stylesheet" type="text/css"  href="{{asset('css/flexslider.css')}}">
  <link rel="stylesheet" type="text/css"  href="{{asset('css/owl.carousel.css')}}">
      
      <!-- Favicon -->
      <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/png" sizes="16x16">
      <!-- Font Awesome Included -->
     
      <!-- CSS reset -->
   
      <link rel="stylesheet" type="text/css" href="{{asset('css/animation.css')}}">
   

   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
   <style>
      .header-v6 .mega-menu .dropdown.mega-menu-fullwidth .dropdown-menu {
          right: -325px !important;
      }
  </style>


    <!-- Styles -->
</head>
<body>
      @include('partials.header')
      @yield('content')
      @include('partials.footer')
   
   
     
  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/983c841b4568323151722b812/d7ea3f42db66c2e6d4db7ff51.js");</script>
 @yield('js')
  
 <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-87782771-1', 'auto');
          ga('send', 'pageview');

</script>

</body>
</html>