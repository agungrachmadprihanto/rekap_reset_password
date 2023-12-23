<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BPR Mandiri Artha Abadi</title>

  @include('includes.styles')

  @stack('style')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Main Sidebar Container -->
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
      @yield('content') 
    <!-- /.content -->

  </div>
  


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('includes.scripts')

@stack('script')

</body>
</html>
