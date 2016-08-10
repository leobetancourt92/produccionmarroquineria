/**
 * Created by luis on 22/03/2016.
 */

$(document).ready(function () {
    $("#formularios").validate({
        rules: {
            nombre: "required",
            descripcion: "required",
            nombre: {
                required: true,
                minlength: 2
            },
            contrasena: {
                required: true,
                minlength: 5
            },
            confirmar_contrasena: {
                required: true,
                minlength: 5,
                equalTo: "#contrasena"
            },
            correo: {
                required: true,
                email: true
            },
            importe: {
                required: true,
                minlength: 6,
            },
            tiempo: {
                required: true,
                min: 3
            },
            ingresos: {
                required: true,
                minlength: 6
            },
            duracion: {
                required: true,
                min: 0
            },
            saldo: {
                required: true,
                minlength: 5
            },
            fecha: "required",
        },
        messages: {
            descti: "Por favor, introdusca la identificaci&oacute;n del cliente",
            required: "Por favor, ingrese el apellido del cliente",
            desc: {
                required: "Por favor, ingrese nombre del cliente",
                minlength: "el nombre del cliente debe tener al menos 2 caracteres"
            },
            contrasena: {
                required: "Por favor, ingrese su contraseña",
                minlength: "Su contraseña debe tener al menos 5 caracteres"
            },
            confirmar_contrasena: {
                required: "Por favor ingrese su contraseña",
                minlength: "Su contraseña debe tener al menos 5 caracteres",
                equalTo: "Por favor, introduzca la misma contraseña que arriba"
            },
            importe: {
                required: "Por favor ingrese el Monto a salicitar",
                minlength: "El Monto debe ser mayor a $100.000"
            },
            tiempo: {
                required: "Por favor, ingrese su Tiempo Laboral ",
                min: "Su tiempo laboral debe ser Igual o mayor a 3 Meses..",
            },
            ingresos:{
                required: "Por favor, ingrese sus Ingresos Mensuales ",
                minlength: "Sus Ingresos Mensuales debe ser mayor a $690.000",
            },
            duracion: {
                required: "Cuanto desea que Dure el Credito  ",
                min: "Su duracion debe ser mayor o igual 1 año..",
            },
            saldo: {
                required: "Por favor, ingrese el saldo",
                minlength: "El saldo minimo debe de ser de $50.000"
            },
            correo: "Por favor, introduce una dirección de correo electrónico válida",
            fecha: "Por favor, introduce una fecha",
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents(".col-xs-9").addClass("has-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!element.next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
            }
        },
        success: function (label, element) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!$(element).next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-xs-9").addClass("has-error").removeClass("has-success");
            $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-xs-9").addClass("has-success").removeClass("has-error");
            $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
        }
    });
});
