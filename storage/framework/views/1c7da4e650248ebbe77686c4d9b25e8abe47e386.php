<!DOCTYPE html>
<html>
<head>
  <?php echo $__env->make('plantilla.librerias.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Header -->
       <?php echo $__env->make('plantilla.partes.encabezado', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Sidebar -->
      <?php echo $__env->make('plantilla.partes.lateral', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
          <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Footer -->
      <?php echo $__env->make('plantilla.partes.piedepagina', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     
    </div><!-- ./wrapper -->
      <?php echo $__env->make('plantilla.librerias.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>