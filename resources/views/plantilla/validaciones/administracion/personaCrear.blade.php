<!--Creamos el script de validaciòn del formulario de creaciòn de persona -->

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
                per_identificacion: {
                    validators: {
                        notEmpty: {
                            message: 'El numero de documento es requerido'
                        },
                        stringLength: {
                            min: 5,
                            message: 'El numero de documento debe ser de minimo 5 caracteres'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'El numero de documento solo acepta caracteres numericos'
                        }
                    }
                },
                per_nombres: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre de la persona es requerido'
                        }, regexp: {
                            regexp: /^[\xF1\s \xD1\s a-z\s \xC1\s \xE1\s \xC9\s \xE9\s \xCD\s \xED\s \xD3\s \xF3\s \xDA\s \xFA\s]+$/i,
                            message: 'El campo nombre solo acepta caracteres Alfabeticos'
                        }
                    }
                },
                per_apellidos: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido de la persona es requerido'
                        }, regexp: {
                            regexp: /^[\xF1\s \xD1\s a-z\s \xC1\s \xE1\s \xC9\s \xE9\s \xCD\s \xED\s \xD3\s \xF3\s \xDA\s \xFA\s]+$/i,
                            message: 'El campo apellido solo acepta caracteres Alfabeticos'
                        }
                    }
                },
                per_direccion: {
                    validators: {
                        notEmpty: {
                            message: 'la direccion  es un campo requerido'
                        }

                    }
                },
                per_telefono: {
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
                per_fecha_nacimiento: {
                    validators: {
                        notEmpty: {
                            message: 'El fecha de nacimiento es requerido'
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
                ciu_id: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor seleccione una ciudad'
                        }
                    }
                },
                per_correo: {
                    validators: {
                        emailAddress: {
                            message: 'esta no es una direccion de correo electronico valida'
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
