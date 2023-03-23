<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Location voiture</title>
 
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
  <link href=" {{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <script src="{{ asset('asset/js/script.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.min.js') }}"></script>

</head>

<body>
  <div id="layout-wrapper">
    <!-- ========== header ========== -->
       @include('layout_voiture.header')
       <br><br><br><br>
       <!-- ========== Left Sidebar Start ========== -->
     
       <!-- Left Sidebar End -->
   </div>
  <!-- start header -->
  

  <!-- end header -->
  <div class="main-content">
    @yield('content')
    <!-- start footer -->
    <br><br><br>
    @include('layout_voiture.footer')
    <!-- end footer -->
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('asset/js/popper.min.js') }}"></script>

  <script>
    AOS.init();
  </script>
  @stack('java')
</body>

</html>