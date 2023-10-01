<!DOCTYPE html>
<html lang="en">
  
@include('komponen.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('logo.png') }}" alt="AdminLTELogo" height="250px" width="250px">
  </div>
  <!-- Navbar -->
  @include('komponen.navbar')
  <!-- Main Sidebar Container -->
  @include('komponen.sidebar')
  @yield('isi')
 {{-- @include('komponen.footer') --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
@include('komponen.script')
@include('sweetalert::alert')
@include('komponen.dark')
</body>
</html>
