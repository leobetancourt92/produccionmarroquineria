<!--Creamos el script de validaciòn del formulario de creaciòn de Empresa -->

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
                emp_Nit: {
                    validators: {
                        notEmpty: {
                            message: 'El NIT de la empresa es requerido *'
                        },
                        stringLength: {
                            min: 5,
                            message: 'El NIT debe ser de minimo 5 caracteres'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'El campo NIT solo acepta caracteres numericos'
                        }
                    }
                },
                emp_razon_social: {
                    validators: {
                        notEmpty: {
                            message: 'La razon social de la empresa es un campo requerido *'
                        }, regexp: {
                            regexp: /^[\xF1\s \xD1\s a-z\s \xC1\s \xE1\s \xC9\s \xE9\s \xCD\s \xED\s \xD3\s \xF3\s \xDA\s \xFA\s]+$/i,
                            message: 'El campo nombre solo acepta caracteres Alfabeticos'
                        }
                    }
                },
                emp_direccion: {
                    validators: {
                        notEmpty: {
                            message: 'La direccion de la empresa en un campo requerido'
                        }
                    }
                },
                emp_telefono: {
                    validators: {
                        notEmpty: {
                            message: 'El campo telefono es requerido'
                        },
                        regexp: {
                            regexp: /^[0-9_\.]+$/,
                            message: 'El campo telefono solo acepta caracteres numericos'
                        }

                    }
                },
                tip_cli_id: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor seleccione un tipo de cliente'
                        }
                    }
                },
                emp_correo: {
                    validators: {
                        emailAddress: {
                            message: 'esta no es una direccion de correo electronico valida'
                        },
                        notEmpty: {
                            message: 'Por favor ingrese un correo electronico valido'
                        }
                        }
                },
                emp_contacto: {
                    validators: {
                        notEmpty: {
                            message: 'El campo contacto es requerido *'
                        }

                    }
                },
                ciu_id: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor seleccione una ciudad'
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
    $('#signupForm1').data('bootstrapValidator').validate();
    
    });
    
 
</script>
