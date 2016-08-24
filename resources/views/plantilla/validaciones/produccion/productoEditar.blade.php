<!--Creamos el script de validaciòn del formulario de edicion de producto -->

<script>

    /*
     * @author Leonardo Betancourt C
     */

    $(document).ready(function () {


        $('#signupForm1').bootstrapValidator({
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
                            message: 'El campo descripcion es requerido *'
                        }
                    }
                },
                cantidad: {
                    validators: {
                        notEmpty: {
                            message: 'El campo cantidad es requerido *'
                        }
                    }
                },
                costo: {
                    validators: {
                        notEmpty: {
                            message: 'El campo costo es requerido *'
                        }, regexp: {
                            regexp: /^[0-9_\.]+$/,
                            message: 'El campo costo solo acepta valores numericos *'
                        }
                    }
                },
                talla: {
                    validators: {
                        notEmpty: {
                            message: 'la talla  es un campo requerido *'
                        }

                    }
                },
                color: {
                    validators: {
                        notEmpty: {
                            message: 'El campo color es requerido *'
                        }

                    }
                }
            }


        }).on('success.field.fv', function (e, data) {
            if (data.fv.getInvalidFields().length > 0) {    // There is invalid field
                data.fv.disableSubmitButtons(true);
            }
        });
        
         /*
     * Validamos los datos de edicion apenas se carga la pagina
     */
    $('#signupForm1').data('bootstrapValidator').validate();
        
        
    });

</script>
