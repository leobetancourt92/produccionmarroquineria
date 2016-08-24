<meta content="text/html" http-equiv="content-type" charset="UTF-8"  >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Produccion | Marroquineria</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTablesResponsive -->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
<!-- DataTablesResponsive -->
<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset ('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">

<link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css')}}">
<!-- Select2 4.0.3 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/select2.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/select2/select2-bootstrap.min.css')}}">
<!--Data Tables-->
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css')}}">
<!-- jQuery 1.12.3 -->
<script src="{{asset ('js/jquery-1.12.3.js') }}"></script>
<!-- Sweetalert -->
<script src="{{ asset('js/sweetalert-dev.js') }}" type="text/javascript"></script>
<!-- Sweetalert -->
<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
<!-- Select2 full -->
<script src="{{ asset('plugins/select2/select2.full.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<link href="{{ asset('css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
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
<!--ColorPicker-->
<script>
  $(function () {
    $('#cp8').colorpicker({
      colorSelectors: {
        'default': '#777777',
        'primary': '#337ab7',
        'success': '#5cb85c',
        'info': '#5bc0de',
        'warning': '#f0ad4e',
        'danger': '#d9534f'
      }
    });
  });
</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--Bootstrap Validator css -->
<link rel="stylesheet" href="{{ asset('css/bootstrapValidator.min.css') }}">
