
<!DOCTYPE html>
<html>
@include('layouts/partials/_head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('layouts/partials/_header')


  <!-- Left side column. contains the logo and sidebar -->
@include('layouts/partials/_sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         @yield('content-header')
      
    </section>
{{-- @include('layouts/partials/_content-header') --}}


    <!-- Main content -->
    <section class="content">
    @yield('content-body')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  {{-- //footer --}}
@include('layouts/partials/_footer')


  <!-- Control Sidebar -->
@include('layouts/partials/_sidebar-control')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('layouts/partials/_script')
@yield('script')
</body>
</html>
