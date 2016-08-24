<!--Creamos el script de validaciòn del formulario de creaciòn de persona -->

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
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre de la persona es requerido'
                        }, regexp: {
                            regexp: /^[\xF1\s \xD1\s a-z\s \xC1\s \xE1\s \xC9\s \xE9\s \xCD\s \xED\s \xD3\s \xF3\s \xDA\s \xFA\s]+$/i,
                            message: 'El campo nombre solo acepta caracteres Alfabeticos'
                        }
                    }
                },
                apellido: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido de la persona es requerido'
                        }, regexp: {
                            regexp: /^[\xF1\s \xD1\s a-z\s \xC1\s \xE1\s \xC9\s \xE9\s \xCD\s \xED\s \xD3\s \xF3\s \xDA\s \xFA\s]+$/i,
                            message: 'El campo apellido solo acepta caracteres Alfabeticos'
                        }
                    }
                },
                pass: {
                    validators: {
                        notEmpty: {
                            message: 'El campo contraseña es requerido '
                        }, identical: {
                            field: 'passconfirm',
                            message: 'El password no es el mismo de el campo de confirmacion'
                        }

                    }
                },
                passconfirm: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor confirme la contrasena'
                        }, identical: {
                            field: 'pass',
                            message: 'Las contrasenas no coinciden '
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: 'esta no es una direccion de correo electronico valida'
                        }, notEmpty: {
                            message: 'El email  es un campo requerido *'
                        }
                    }
                }

            }

        }).on('success.field.fv', function (e, data) {
            if (data.fv.getInvalidFields().length > 0) {
                data.fv.disableSubmitButtons(true);
            }
        });
    });

</script>
