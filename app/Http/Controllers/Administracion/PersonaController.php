<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;
class PersonaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        //$this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCrear() {
        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);
        
        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);

        return view("Modulos.Administracion.persona.crear", compact('objCiudad','objTipoCliente'));
    }

    public function postCrear(Request $request) {
        $per_id                     = "DEFAULT";
        $per_telefono               = $request->input('per_telefono');
        $per_identificacion         = $request->input('per_identificacion');
        $per_nombres               	= $request->input('per_nombres');
        $per_apellidos              = $request->input('per_apellidos');
        $per_direccion              = $request->input('per_direccion');
        $ciu_id              		= $request->input('ciu_id');
        $per_correo                 = $request->input('per_correo');
        $per_fecha_nacimiento       = $request->input('per_fecha_nacimiento');
        $tip_cli_id                 = $request->input('tip_cli_id');
        $per_estado                 = 1;
        
        $sql = DB::insert(
                "INSERT INTO persona "
                . "( "
                . " per_id, "
                . " per_telefono, "
                . " per_identificacion, "
                . " per_nombres, "
                . " per_apellidos, "
                . " per_direccion, "
                . " ciu_id, "
                . " per_correo, "
                . " per_fecha_nacimiento, "
                . " per_estado, "
                . " tip_cli_id "
                . ") "
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?)", array(
                    $per_id,
                    $per_telefono,
                    $per_identificacion,
                    $per_nombres,
                    $per_apellidos,
                    $per_direccion,
                    $ciu_id,
                    $per_correo,
                    $per_fecha_nacimiento,
                    $per_estado,
                    $tip_cli_id
        ));
        if ($sql <> 0):
            Alert::success('El Registro Fue Exitoso..!!!')->persistent('Cerrar')->autoclose(3000);
            return Redirect::to(url('persona/listar'));
        else:
            echo "El Registro No Se Guardo";
        endif;
    }

    public function getListar() {
        $sql = "SELECT * FROM  persona ";
        $personas = \DB::select($sql);

        return view('Modulos.Administracion.persona.listar', compact("personas"));
    }
    public function getVer($per_id){

        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);
        
        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);
        
        $sql = "select * from persona where per_id=$per_id";
        $personas = \DB::select($sql);
        return view("Modulos.Administracion.persona.show", compact('personas','objCiudad','objTipoCliente'));
    }

    public function getEditar($per_id) {
        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);

        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);

        $sql = "select * from persona where per_id=$per_id";
        $personas = \DB::select($sql);
        return view("Modulos.Administracion.persona.editar", compact('personas','objCiudad','objTipoCliente'));
    }
    public function postEditar(){
        $datos = \Request::all();
        $personas =\DB::select("UPDATE persona SET per_identificacion ='{$datos['per_identificacion']}',per_nombres ='{$datos['per_nombres']}',
        						per_apellidos ='{$datos['per_apellidos']}',per_direccion ='{$datos['per_direccion']}',per_telefono='{$datos['per_telefono']}', 
        						ciu_id='{$datos['ciu_id']}',per_fecha_nacimiento='{$datos['per_fecha_nacimiento']}', per_correo='{$datos['per_correo']}', 
        						tip_cli_id='{$datos['tip_cli_id']}' 
                                WHERE per_id='".$datos['per_id']."'");

        Alert::success('Persona Actualizada Con exito!')->persistent('Cerrar')->autoclose(3000);
        
        return Redirect::to(url('persona/listar'));    
    }
    public function getDesactivar($per_id){

        $sql = "UPDATE persona SET per_estado=0 WHERE per_id=$per_id";
        $personas = \DB::select($sql);
        return Redirect::to(url('persona/listar'));
    }

    public function getActivar($per_id){

        $sql = "UPDATE persona SET per_estado=1 WHERE per_id=$per_id";
        $personas = \DB::select($sql);
        return Redirect::to(url('persona/listar'));
    }
}
?>
