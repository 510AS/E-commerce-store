<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app() -> getLocale() === 'ar' ? 'rtl' : 'ltr'}}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>@yield('titel')</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <link rel="apple-touch-icon" href="{{asset('assets/dashboard/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/dashboard/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/pages/dashboard-ecommerce.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/'.getFolder().'/style-rtl.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  @include('dashboard.includes.header')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('dashboard.includes.side-menu')




  @yield('content')


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('dashboard.includes.footer')
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('assets/dashboard/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('assets/dashboard/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/dashboard/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('assets/dashboard/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/dashboard/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/dashboard/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('assets/dashboard/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/dashboard/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/dashboard/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('assets/dashboard/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  @yield('script')
</body>
</html>
