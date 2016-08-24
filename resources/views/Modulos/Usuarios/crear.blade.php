@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Crear usuario" -->
@include('plantilla.validaciones.usuarios.usuariosCrear')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE USUARIOS</h3></center>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                        class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->

                    <form name="formularios" id="formularios"  class="form-horizontal" method="post" autocomplete="off" action="<?php echo url("usuario/crear") ?>">
                        <div class="box-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Nombre</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
                                </div>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Apellido</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" >
                                </div>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Email</label>

                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                                </div>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Contraseña</label>

                                <div class="col-xs-9">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" >
                                </div>
                            </div>
                             <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Confirmar Contraseña</label>

                                <div class="col-xs-9">
                                    <input type="password" class="form-control" id="passconfirm" name="pass-confirm" placeholder="Confirmar contraseña" >
                                </div>
                            </div>
                            

                        </div>

                        <div class="box-footer">
                            <div class="col-sm-3"></div>
                            <button type="submit" class="btn btn-primary" >Registrar</button>
                        </div>

                    </form><!-- /.form-->

                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection

