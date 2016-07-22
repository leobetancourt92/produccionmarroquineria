<?php
/**
 * @Nombre: ${user}Luis Fernando Angulo Palacios
 * @Fecha:  13/06/2016
 * @Hora:  08:36 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */
?>
@extends('plantilla.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE CUENTAS</h3></center>
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
                    <form name="formularios" id="formularios" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url("producto/create")?>"  >
                        <div class="box-body">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombre">Descripcion</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" required>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="cantidad">Cantidad</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="costo">Costo</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="costo" name="costo" placeholder="costo">
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="talla">Talla</label>
                                <div class="col-lg-9">
                                    <select class="js-example-basic-single form-control" id="talla" name="talla">
                                        <option>Selecciona Talla</option>
                                        <?php foreach ($objTalla as $talla){?>
                                            <option value="<?php echo $talla->tal_id?>"><?php echo $talla->tal_dimension ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="color">Color</label>
                                <div class="col-lg-9">
                                    <select class="form-control js-example-basic-single" id="color" name="color">
                                        <option>Selecciona Color</option>
                                        <?php foreach ($objColor as $color){?>
                                           <option value="<?php echo $color->col_id?>"><?php echo $color->col_descripcion ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>                

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" >Registrar</button>
                        </div>
                    </form><!-- /.form-->
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>

@endsection