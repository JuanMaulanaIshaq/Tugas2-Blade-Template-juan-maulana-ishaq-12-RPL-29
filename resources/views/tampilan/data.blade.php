<!DOCTYPE html>
<html lang="en">
@include('tampilan.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('tampilan.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tampilan.sidebar')

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content-->
   @yield('content')
    <!-- End content -->
  </div>
  <!-- End content-wrapper -->

  @include('tampilan.footer')

  <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  @include('tampilan.scrip')
</body>
</html>
