<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ $title ?? config('app.name') }}</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ url('dist/fontawesome-free/css/all.min.css') }}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

   <!-- Theme style -->
   <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">

   {{-- Sweetaler --}}
   <script src="{{ url('dist/sweetalert/sweetalert2.min.js') }}"></script>
   <link rel="stylesheet" href="{{ url('dist/sweetalert/sweetalert2.min.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">

      <!-- Preloader -->
      <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

      @include('layout.navbar')

      @include('layout.sidebar')

      @yield('content')

      <footer class="main-footer">
         <strong>Copyright &copy; 2021 <a href="#">PPK Tanggulangin</a>.</strong>
         All rights reserved.
         <!-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div> -->
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->

   <!-- jQuery -->
   <script src="{{ url('dist/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ url('dist/js/bootstrap.bundle.min.js') }}"></script>


   <!-- AdminLTE App -->
   <script src="{{ url('dist/js/adminlte.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{ url('dist/js/demo.js') }}"></script>

   {{-- My Script --}}
   <script src="{{ url('js/massage.js') }}"></script>

</body>

</html>