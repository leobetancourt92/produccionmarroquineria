@extends('menu.estructura')
@section('content')
<!-- invocamos el  archivo con las validaciones del formulario "Crear talla" -->
@include('plantilla.validaciones.produccion.tallaCrear')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE TALLAS</h3></center>
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

                    <form name="formularios" id="formularios"  class="form-horizontal" method="post" autocomplete="off" action="<?php echo url("talla/crear") ?>">
                        <div class="box-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombre-talla">Dimensi&oacute;n</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="dimension" id="dimension" placeholder="Nombre">
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombre-talla">Tipo de producto</label>

                                <div class="col-lg-9">
                                    <select class="form-control select2-single" name="tipo_producto" id="tipoproducto" placeholder="Nombre"  >
                                        <option value="">Selecciona Tipo Producto</option>
                                        <?php foreach ($objTipoProductos as $tipo) { ?>
                                            <option value="<?php echo $tipo->tip_pro_id ?>"><?php echo $tipo->tip_descripcion ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <div class="col-sm-3"></div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>

                    </form><!-- /.form-->

                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection

