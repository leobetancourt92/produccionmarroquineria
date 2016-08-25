<!--Creamos el script de validaciòn del formulario de modificacion  de cantidades de producto -->

<script>

    /*
     * @author Leonardo Betancourt C
     */

    $(document).ready(function () {


        $('#formularios').bootstrapValidator({
            message: 'Este valor no es valido',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
              descripcion: {
                    validators: {
                        notEmpty: {
                            message: 'El campo descripcion  es requerido *'
                        }
                    }
                }
            }


        }).on('success.field.fv', function (e, data) {
            if (data.fv.getInvalidFields().length > 0) {    // There is invalid field
                data.fv.disableSubmitButtons(true);
            }
        });
    });

</script>
