@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE CUENTAS</h3></center>
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

                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombre-talla">Dimensi&oacute;n</label>

                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="dimension" placeholder="Nombre" required>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombre-talla">Tipo de producto</label>

                                <div class="col-lg-9">
                                    <select class="form-control select2-single" name="tipo_producto" placeholder="Nombre" required>
                                        <option>Selecciona Tipo Producto</option>
                                        <?php foreach ($objTipoProductos as $tipo) { ?>
                                            <option value="<?php echo $tipo->tip_pro_id ?>"><?php echo $tipo->tip_descripcion ?></option>
                                        <?php } ?>
                                    </select>
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

