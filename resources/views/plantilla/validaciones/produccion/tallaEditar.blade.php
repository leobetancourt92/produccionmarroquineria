<!--Creamos el script de validaciòn del formulario de ediciòn de Talla-->

<script>

    /*
     * @author Leonardo Betancourt C
     */

    $(document).ready(function () {


        $('#formularioTalla').bootstrapValidator({
            message: 'Este valor no es valido',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                dimension: {
                    validators: {
                        notEmpty: {
                            message: 'El campo dimension es requerido *'
                        }
                        
                    }
                },
                tipo_producto: {
                    validators: {
                        notEmpty: {
                            message: 'El ID de tipo_producto es un campo requerido *'
                        }
                    }
                }


            }

        }).on('success.field.fv', function (e, data) {
            if (data.fv.getInvalidFields().length > 0) {
                data.fv.disableSubmitButtons(true);
            }
        });
        
        /*
     * Validamos los datos de edicion apenas se carga la pagina
     */
    $('#formularioTalla').data('bootstrapValidator').validate();
        
    });

</script>
