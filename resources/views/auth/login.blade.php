@extends('auth.sesion')

@section('content')

<div class="login-box">
	<div class="login-logo">
		<a href="{{ url('/auth/login') }}"><b>Marroquienria </b>C.D.T.I</a>
	</div>
	<!-- /.login-logo -->
	@section('content')
	<div class="login-box-body">
		<h3><p class="login-box-msg">Inciar Sesi&oacute;n</p></h3>
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>¡Lo sentimos!</strong>Hubo algunos problemas con su entrada<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<form  role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password" name="password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox"> Recuerdame
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		

		<a href="#">He olvidado mi contraseña</a><br>
		<a href="{{ url('/auth/register') }}" class="text-center">Registrar una Nueva Cuenta</a>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
