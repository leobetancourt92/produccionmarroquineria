@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Editar Persona</h3></center>
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
                    <?php foreach($personas as $persona){?>
                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo url("persona/editar/")?>">
                        <div class="box-body">
                            <input type="hidden" name="per_id" value="<?php echo $persona->per_id ?>"?>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="per_direccion">Direccion</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="per_direccion" name="per_direccion" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $persona->per_direccion;?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="caper_telefonontidad">Telefono</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="per_telefono" name="per_telefono" value="<?php echo $persona->per_telefono; ?>" >
                                </div>
                            </div>
							<div class="col-lg-6 form-group">
	                            <label class="col-sm-3 control-label" for="per_ciu_id_fk">Ciudad</label>
	                            <div class="col-sm-9">
	                                <select class="form-control Select2-single" name="per_ciu_id_fk" id="per_ciu_id_fk" required>
	                                    <option>Selecciona Ciudad</option>
	                                    <?php foreach ($objCiudad as $Ciudad):
	                                       if($persona->per_ciu_id_fk == $Ciudad->ciu_id):?>
                                                <option value="<?php echo $Ciudad->ciu_id;?>" selected><?php echo $Ciudad->ciu_nombre; ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $Ciudad->ciu_id;?>" ><?php echo $Ciudad->ciu_nombre; ?></option>
                                            <?php endif; endforeach;?>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="per_fecha_nacimiento">Fecha De Nacimiento</label>
                                <div class="col-xs-9">
                                    <input type="date" class="form-control" id="per_fecha_nacimiento" name="per_fecha_nacimiento" value="<?php echo $persona->per_fecha_nacimiento ?>" placeholder="per_fecha_nacimiento" onkeypress="return numeros(event)" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="per_correo">Correo</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="per_correo" name="per_correo" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $persona->per_correo ?>" placeholder="tucorreo@ejemplo.com" title="Ingrese su correo electrónico" onkeyup="this.value = this.value.toUpperCase();" class="span3" onblur="usu_c()" pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$" title="tucorreo@dominio.com"  onpaste="return false" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="tip_cli_id">Tipo Cliente</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="tip_cli_id" name="tip_cli_id" required>
                                        <option>Selecciona Tipo Cliente</option>
                                        <?php foreach ($objTipoCliente as $tipocliente):
	                                       if($tipocliente->tip_cli_id == $persona->tip_cli_id):?>
                                                <option value="<?php echo $tipocliente->tip_cli_id;?>" selected><?php echo $tipocliente->tip_nombres." ".$tipocliente->tip_apellidos ;?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $tipocliente->tip_cli_id;?>" ><?php echo $tipocliente->tip_nombres." ".$tipocliente->tip_apellidos ; ?></option>
                                            <?php endif; endforeach;?>
                                    </select>
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