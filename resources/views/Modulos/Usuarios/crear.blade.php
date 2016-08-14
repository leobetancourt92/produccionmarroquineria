@extends('menu.estructura')
@section('content')
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

                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>

                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Nombre</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Apellido</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
                                </div>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Email</label>

                                <div class="col-xs-9">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Contraseña</label>

                                <div class="col-xs-9">
                                    <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                                </div>
                            </div>
                             <div class="col-sm-8 form-group">
                                <label class="col-sm-3 control-label">Confirmar Contraseña</label>

                                <div class="col-xs-9">
                                    <input type="password" class="form-control" name="pass-confirm" placeholder="Confirmar contraseña" required>
                                </div>
                            </div>
                            

                        </div>

                        <div class="box-footer">
                            <div class="col-sm-3"></div>
                            <button type="submit" class="btn btn-primary" onclick="valida_envia()">Registrar</button>
                        </div>

                    </form><!-- /.form-->

                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection

