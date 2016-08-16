@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Ver Empresa</h3></center>
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

                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('empresa/crear') ?>"  >
                        <div class="box-body">
                            <?php foreach($empresas as $empresa){?>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="emp_nit">Nit</label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" id="emp_nit" name="emp_nit" value="<?php echo $empresa->emp_nit ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="emp_razon_social">Razon Social</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="emp_razon_social" name="emp_razon_social" value="<?php echo $empresa->emp_razon_social ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="emp_direccion">Direccion</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="emp_direccion" name="emp_direccion" value="<?php echo $empresa->emp_direccion ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="emp_telefono">Telefono</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="emp_telefono" name="emp_telefono" value="<?php echo $empresa->emp_telefono ?>" disabled>
                                </div>
                            </div>
							<div class="col-lg-6 form-group">
	                            <label class="col-sm-3 control-label" for="ciu_id">Ciudad</label>
	                            <div class="col-sm-9">
	                                <select class="form-control Select2-single" name="ciu_id" id="ciu_id" disabled>
	                                    <option>Selecciona Ciudad</option>
	                                    <?php foreach ($objCiudad as $Ciudad):
	                                       if($empresa->ciu_id == $Ciudad->ciu_id):?>
                                                <option value="<?php echo $Ciudad->ciu_id?>" selected disabled><?php echo $Ciudad->ciu_nombre ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $Ciudad->ciu_id?>" disabled><?php echo $Ciudad->ciu_nombre ?></option>
                                            <?php endif; endforeach;?>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="emp_contacto">Contacto</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="emp_contacto" name="emp_contacto" value="<?php echo $empresa->emp_contacto ?>" disabled>
                                </div>
                            </div>
	                        <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="emp_correo">Correo</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="emp_correo" name="emp_correo" value="<?php echo $empresa->emp_correo ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
	                            <label class="col-sm-3 control-label" for="tip_cli_id">Tipo Cliente</label>
	                            <div class="col-sm-9">
	                                <select class="form-control Select2-single" name="tip_cli_id" id="tip_cli_id" disabled>
	                                    <option>Selecciona Tipo de Cliente</option>
	                                    <?php foreach ($objTipoCliente as $tipocliente):
	                                       if($tipocliente->tip_cli_id == $empresa->tip_cli_id):?>
                                                <option value="<?php echo $tipocliente->tip_cli_id;?>" selected disabled><?php echo $tipocliente->tip_cli_descripcion ;?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $tipocliente->tip_cli_id?>" disabled><?php echo $tipocliente->tip_cli_descripcion ; ?></option>
                                            <?php endif; endforeach;?>
	                                </select>
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