<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')
  <div class="content-wrapper">    
    @include('admin.partials.breadcrumb')
    <section class="content">
      @yield('content')
    </section>
  </div>
  @include('admin.layouts.footer')  
</div>

<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ URL::asset('assets/dist/js/adminlte.js')}}"></script>
<script src="{{ URL::asset('assets/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>