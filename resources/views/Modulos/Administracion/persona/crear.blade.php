<?php
//
/**
 * @Nombre: ${user}Mercedes Ortiz Cardenas
 * @Fecha:  14/06/2016
 * @Hora:  12.52 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */
?>
@extends('plantilla.estructura')
@section('content')
<h1>
    Creación de Pesonas
</h1>
<!-- /.row -->
<form action="#" role="form" method="POST" >
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <div class="col-lg-12">
        <div class="form-group has-success col-lg-4">
            <label class="control-label" for="per_identificacion">Numero de Identificación </label>
            <input type="number" class="form-control" name="per_identificacion" id="per_identificacion" onkeypress="return numeros(event)" required/>

            <label class="control-label" for="per_nombres">Nombres</label>
            <input type="text" class="form-control" name="per_nombres" id="per_nombres" onkeyup="this.value = this.value.toUpperCase();"  required/>

            <label class="control-label" for="per_apellidos">Apellidos</label>
            <input type="text" class="form-control" name="per_apellidos" id="per_apellidos" onkeyup="this.value = this.value.toUpperCase();"  required/>

            <label class="control-label" for="per_telefono">Teléfono</label>
            <input type="text" class="form-control" name="per_telefono" id="per_primer_apellido" onkeyup="this.value = this.value.toUpperCase();" required/>

            <label class="control-label" for="per_segundo_apellido">Dirección</label>
            <input type="text" class="form-control" name="per_segundo_apellido" id="per_segundo_apellido" onkeyup="this.value = this.value.toUpperCase();" required/>

            <label class="control-label" for="per_ciudad">Ciudad</label>
            <input type="text" class="form-control" name="per_ciudad" id="per_ciudad" onkeyup="this.value = this.value.toUpperCase();"  required/>

            <label class="control-label" for="email">Correo</label>
            <input type="text" class="form-control" placeholder="tucorreo@ejemplo.com" title="Ingrese su correo electrónico" onkeyup="this.value = this.value.toUpperCase();" class="span3" onblur="usu_c()" pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$" title="tucorreo@dominio.com" id="per_correo"  name="per_correo"  onpaste="return false" required>

            <label class="control-label" for="per_fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="per_fecha_nacimiento" id="per_fecha_nacimiento" onkeyup="this.value = this.value.toUpperCase();"  required/> 

            <div class="box-footer">
                <button type="submit" class="btn btn-warning">Crear</button>
                <input type="reset" class="btn btn-primary" value="Limpiar" />
            </div>
        </div>
</form>

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