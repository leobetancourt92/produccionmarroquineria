<!DOCTYPE html>
<html>
<head>
    @include('plantilla.librerias.css')
</head>
<body class="hold-transition login-page">

@yield('content')

<!-- jQuery-2.2.0 -->
<script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<!-- iCheck -->
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
@include('plantilla.librerias.js')


</body>
</html>
