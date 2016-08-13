function Activar($id)
{
    var id = $id;
    console.log(id);
    swal({
            title: " ",
            text: "Se Activara este Registro!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false },
        function(isConfirm){
            if (isConfirm) {
                swal(" ","El Registro se Activo", "success");
                 window.location = "activar/"+ id;
            }
            else {
                swal(" ", "El registro no se Activara", "error");
            }
        });
}

function Desactivar($id)
{
    var id = $id;
    swal({
            title: " ",
            text: "Desea Desactivar este registro!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false },
        function(isConfirm){
            if (isConfirm) {
                swal(" ","El Registro se Desactivo","success");
                window.location = "desactivar/" + id;
            }
            else {
                swal(" ","El registro no se Desactivara","error");
            }
        });
}