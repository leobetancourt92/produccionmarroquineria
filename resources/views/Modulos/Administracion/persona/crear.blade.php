@extends('menu.estructura')
@section('content')

<div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"><i class="fa fa-users fa-users"></i> REGISTRO DE PERSONAS</h3></center>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('persona/crear') ?>">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class=""></i><font><font>Informacion General
                            </h2>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_direccion">Dirección </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="per_direccion" id="per_direccion" placeholder="Digite su dirección de domicilio" onkeyup="this.value = this.value.toUpperCase();"  required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_telefono">Teléfono </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="per_telefono" id="per_telefono" placeholder="Digite su número de teléfono" onkeyup="this.value = this.value.toUpperCase();"  required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="ciu_id">Ciudad</label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="ciu_id" id="ciu_id" placeholder="Ciudad">
                                    <option>Selecciona Ciudad</option>
                                    <?php foreach ($objCiudad as $Ciudad){?>
                                       <option value="<?php echo $Ciudad->ciu_id?>"><?php echo $Ciudad->ciu_nombre ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_fecha_nacimiento">Fecha de Nacimiento </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="per_fecha_nacimiento" id="per_fecha_nacimiento" placeholder="per_fecha_nacimiento" onkeypress="return numeros(event)"required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_correo">Correo </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="tucorreo@ejemplo.com" title="Ingrese su correo electrónico" onkeyup="this.value = this.value.toUpperCase();" class="span3" onblur="usu_c()" pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$" title="tucorreo@dominio.com" id="per_correo"  name="per_correo"  onpaste="return false" required>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Tipo Cliente</label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id">
                                    <option>Selecciona Tipo Cliente</option>
                                    <?php foreach ($objTipoCliente as $TipoCliente){?>
                                       <option value="<?php echo $TipoCliente->tip_cli_id?>"><?php echo $TipoCliente->tip_nombres." ".$TipoCliente->tip_apellidos ;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="box-footer">
                                <input type="submit" class="btn btn-success" onclick="valida_envia()" value="Registrar" id="registrar" />               
                                <input type="reset" class="btn btn-primary" value="Limpiar" />
                            </div>
                        </div>
                    </div>
                </form><!-- /.form-->
            </div><!-- /.box box-primary -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.box-body -->
</div><!-- /.box-->

<script>

function numeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8, 37, 39, 46];
    tecla_especial = false
    
    for (var i in especiales){
	    if (key == especiales[i]){
		    tecla_especial = true;
		    break;
	 	}
	}

    if (letras.indexOf(tecla) == - 1 && !tecla_especial)
    	return false;
    }

    $mail_correcto = 0;
    //compruebo unas cosas primeras 
    if ((strlen($email) >= 6) && (substr_count($email, "@") == 1) && (substr($email, 0, 1) != "@") && (substr($email, strlen($email) - 1, 1) != "@")){
	    if ((!strstr($email, "'")) && (!strstr($email, "\"")) && (!strstr($email, "\\")) && (!strstr($email, "\$")) && (!strstr($email, " "))) {
	    	//miro si tiene caracter . 
		    if (substr_count($email, ".") >= 1){
			    //obtengo la terminacion del dominio 
			    $term_dom = substr(strrchr ($email, '.'), 1);
			    //compruebo que la terminación del dominio sea correcta 
			    if (strlen($term_dom) > 1 && strlen($term_dom) < 5 && (!strstr($term_dom, "@"))){
				    //compruebo que lo de antes del dominio sea correcto 
				    $antes_dom = substr($email, 0, strlen($email) - strlen($term_dom) - 1);
				    $caracter_ult = substr($antes_dom, strlen($antes_dom) - 1, 1);
				    if ($caracter_ult != "@" && $caracter_ult != "."){
				    	$mail_correcto = 1;
				    }
			    }
		    }
	    }
    }
    if ($mail_correcto)
        return 1;
    else
    	return 0;
    }

</script>
@endsection
