@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Ver Productos</h3></center>
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

                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url("producto/create")?>"  >
                        <div class="box-body">
                            <?php foreach($productos as $producto){?>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombre">Descripcion</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto->pro_descripcion ?>" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="cantidad">Cantidad</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $producto->pro_cantidad ?>" disabled>
                                </div>
                            </div>


                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="talla">Talla</label>
                                <div class="col-lg-9">
                                    <!--                                    <select class="form-control select2-single" id="talla" name="talla">-->
                                    <select class="form-control select2-single"   id="talla" name="talla">

                                        <option>Selecciona Talla</option>
                                        <?php foreach ($objTalla as $talla):
                                            if($talla->tal_id == $producto->tal_id):?>
                                                <option value="<?php echo $talla->tal_id?>" selected disabled><?php echo $talla->tal_dimension ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $talla->tal_id?>" disabled><?php echo $talla->tal_dimension ?></option>

                                            <?php endif; endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="color">Color</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="color" name="color">
                                        <option>Selecciona Color</option>
                                        <?php foreach ($objColor as $color):
                                            if ($color->col_id == $producto->tal_id):?>
                                                <option value="<?php echo $color->col_id?>" selected disabled><?php echo $color->col_descripcion ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $color->col_id?>" disabled><?php echo $color->col_descripcion ?></option>
                                            <?php endif; endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="costo">Costo</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="costo" name="costo" value="<?php echo $producto->pro_costo ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </form><!-- /.form-->
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection