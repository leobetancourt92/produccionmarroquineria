
<!DOCTYPE html>
<html lang="es">
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
	{{--<section class="content-header">--}}
	{{--<h1>--}}
	{{--Dashboard--}}
	{{--<small>Version 2.0</small>--}}
	{{--</h1>--}}
	{{--<!-- You can dynamically generate breadcrumbs here -->--}}
	{{--<ol class="breadcrumb">--}}
	{{--<li><a href="#"><i class="fa fa-dashboard"></i>Lista</a></li>--}}
	{{--<li class="active">Dashboard</li>--}}
	{{--</ol>--}}
	{{--</section>--}}

	<!-- Main content -->
		<section class="content">
			<!-- Your Page Content Here -->
			@yield('content')
			@include('sweet::alert')
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<!-- Footer -->
	@include('plantilla.partes.piedepagina')
</div><!-- ./wrapper -->
@include('plantilla.librerias.js')
</body>
</html>
