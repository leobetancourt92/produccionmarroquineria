@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Cantidad de producto" -->
@include('plantilla.validaciones.produccion.productoCantidad')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Editar Productos</h3></center>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <?php foreach($productos as $producto){?>
                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo url("producto/cantidad/")?>">
                        <div class="box-body">
                            <input type="hidden" name="id" value="<?php echo $producto->pro_id ?>">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="cantidad">Cantidad</label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" id="cantidad" name="cantidad" required >
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" >Registrar</button>
                        </div>
                        <?php }?>
                    </form><!-- /.form-->
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection