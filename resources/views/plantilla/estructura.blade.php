<!DOCTYPE html>
<html>
<head>
  @include('plantilla.librerias.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Header -->
       @include('plantilla.partes.encabezado')
      <!-- Sidebar -->
      @include('plantilla.partes.lateral')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Footer -->
      @include('plantilla.partes.piedepagina')
     
    </div><!-- ./wrapper -->
      @include('plantilla.librerias.js')
  </body>
</html>