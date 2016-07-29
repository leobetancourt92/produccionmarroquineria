<?php
/**
 * @Nombre: ${user}Luis Fernando Angulo Palacios
 * @Fecha:  12/06/2016
 * @Hora:  02:07 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Produccion | Marroquineria</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">

<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>


<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo e(asset ('plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo e(asset('css/AdminLTE.min.css')); ?>">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo e(asset('css/skins/_all-skins.min.css')); ?>">
<!-- Select2 4.0.3 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2-bootstrap.min.css')); ?>">
<!--Data Tables-->
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables/dataTables.bootstrap.css')); ?>">
<!-- jQuery 1.12.3 -->
<script src="<?php echo e(asset ('js/jquery-1.12.3.js')); ?>"></script>
<!-- Sweetalert -->
<script src="<?php echo e(asset('js/sweetalert-dev.js')); ?>" type="text/javascript"></script>
<!-- Sweetalert -->
<link rel="stylesheet" href="<?php echo e(asset('css/sweetalert.css')); ?>">
<!-- Select2 full -->
<script src="<?php echo e(asset('plugins/select2/select2.full.js')); ?>" type="text/javascript"></script>


<script>
  $(document).ready(function() {
    $('#tabla').DataTable({
      responsive: true
    });
  } );
</script>
<!-- Select2 -->
<script>
  $( "#dropdown" ).select2({
    theme: "bootstrap"
  });
</script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
