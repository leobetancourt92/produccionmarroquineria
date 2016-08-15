@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE TIPOS DE PRODUCTOS</h3></center>
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

                    <form name="formularios" id="formularios"  class="form-horizontal" method="post" autocomplete="off" action="<?php echo url("tipo/crear") ?>">
                        <div class="box-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="descripcion">Descripcion</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del Producto" required>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>

                    </form><!-- /.form-->

                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection
