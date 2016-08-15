@extends('auth.sesion')

@section('content')

<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/auth/login') }}"><b>Marroquienria </b>C.D.T.I</a>
    </div>
    <div class="register-box-body">
        <h3><p class="login-box-msg">Registrar una nueva Cuenta</p></h3>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Lo sentimos</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Correo" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contrase&nacute;;a" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Confirmar Contrase&nacute;a "
                       name="password_confirmation">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Estoy de acuerdo<a href="">T&eacute;rminos</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>



        <a href="{{ url('/auth/login') }}" class="text-center">Ya tengo una Cuenta</a>
    </div>
</div>
@endsection
