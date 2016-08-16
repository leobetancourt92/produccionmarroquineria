@extends('menu.estructura')
@section('content')

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"><i class="fa fa-industry fa-industry"></i>EDITAR DE EMPRESAS</h3></center>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
				<?php foreach($empresas as $empresa){?>
                <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url ('empresa/editar/')?>">
                    <input type="hidden" name="emp_id" value="<?php echo $empresa->emp_id ?>"?>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class=""></i><font><font>Información General
                            </h2>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="emp_nit">Nit </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="emp_nit" id="emp_nit" value="<?php echo $empresa->emp_nit ?>" placeholder="Digite su número de identificación sin puntos ni comas" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="emp_razon_social">Razón Social </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="emp_razon_social" id="emp_razon_social" value="<?php echo $empresa->emp_razon_social; ?>" placeholder="Digite el nombre de la empresa" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="emp_direccion">Dirección </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="emp_direccion" id="emp_direccion" value="<?php echo $empresa->emp_direccion ?>" placeholder="Digite la Dirección" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="emp_telefono">Teléfono </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="emp_telefono" id="emp_telefono" value="<?php echo $empresa->emp_telefono ?>" placeholder="Digite el Teléfono" required/>
                            </div>
                        </div>        
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="ciu_id">Ciudad</label>
                            <div class="col-xs-9">
                                <select class="form-control select2-single" name="ciu_id" id="ciu_id" placeholder="Ciudad" required>
                                    <?php foreach ($objCiudad as $Ciudad):
                                       if($empresa->ciu_id == $Ciudad->ciu_id):?>
                                            <option value="<?php echo $Ciudad->ciu_id;?>" selected><?php echo $Ciudad->ciu_nombre; ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo $Ciudad->ciu_id;?>" ><?php echo $Ciudad->ciu_nombre; ?></option>
                                        <?php endif; endforeach;?>
                                </select>
                            </div>
                        </div>                  
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="emp_contacto">Contacto </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="emp_contacto" id="emp_contacto" value="<?php echo $empresa->emp_contacto ?>" placeholder="Digite el nombre del contacto" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="emp_correo">Correo </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="tucorreo@ejemplo.com" title="Ingrese su correo electrónico" value="<?php echo $empresa->emp_correo ?>" class="span3" pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$" title="tucorreo@dominio.com" id="emp_correo"  name="emp_correo"  onpaste="return false" required>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Tipo Cliente</label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id" required>
                                    <?php foreach ($objTipoCliente as $tipocliente):
                                       if($tipocliente->tip_cli_id == $empresa->tip_cli_id):?>
                                            <option value="<?php echo $tipocliente->tip_cli_id;?>" selected><?php echo $tipocliente->tip_cli_descripcion ;?></option>
                                        <?php else: ?>
                                            <option value="<?php echo $tipocliente->tip_cli_id;?>" ><?php echo $tipocliente->tip_cli_descripcion ; ?></option>
                                        <?php endif; endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="box-footer">
                            <button type="submit" class="btn btn-primary" >Actualizar</button>
                        </div>
                        </div>
                    </div>
                </form><!-- /.form-->
                <?php }?> 
            </div><!-- /.box box-primary -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.box-body -->
</div><!-- /.box-->

@endsection