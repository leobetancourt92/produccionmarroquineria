<?php



namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

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
     * Display a listing of the resource.
     *
     * @return Response
     */
//    public function getIndex() {
//        return view("plantilla.estructura");
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCrear() {

        return view("Modulos.administracion.persona.crear");
    }

    public function postCrear(Request $request) {

        $per_identificacion   = $request->input('per_identificacion');
        $per_nombres          = $request->input('per_nombres');
        $per_apellidos        = $request->input('per_apellidos');
        $per_telefono         = $request->input('per_telefono');
        $per_direccion        = $request->input('per_direccion');
        $ciu_id               = $request->input('ciu_id');
        $per_correo           = $request->input('per_correo');
        $per_fecha_nacimiento = $request->input('per_fecha_nacimiento');
        
 DB::insert(
                "INSERT INTO persona "
                . "( "
                . " per_identificacion,  "
                . " per_nombres,   "
                . " per_apellidos,  "
                . " per_telefono, "
                . " per_direccion, "
                . " ciu_id, "
                . " per_correo, "
                . " per_fecha_nacimiento "

                . ") "
                . "VALUES (?,?,?,?,?,?,?,?)", array(
            $per_identificacion,
            $per_nombres,
            $per_apellidos,
            $per_telefono,
            $per_direccion,
            $ciu_id,
            $per_correo,
            $per_fecha_nacimiento
        ));
        
        return Redirect::to(url('administracion/persona/listar'));
    }

    public function getListar() {
        $identificacion = "";
        if (isset($_GET['identificacion'])) {
            $identificacion = $_GET['identificacion'];
        }
        $where = "where 1 = 1";
        if (!empty($identificacion)) {
            
        }
        $personas = DB::select("SELECT "
                        . "per_identificacion, "
                        . "per_nombres, "
                        . "per_apellidos, "
                        . "per_telefono, "
                        . "per_direccion,"
                        . "per_correo,"
                        . "per_fecha_nacimiento"
                        . " FROM persona "
                        . $where
        );
        return view('Modulos.administracion.persona.listar', compact("personas", "identificacion"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEditar($identificacion) {
        $identificacion;
        if (is_null($identificacion)) {
            App::abort(404);
        }
        $personas = DB::select("SELECT * FROM persona WHERE per_identificacion={$identificacion}");
        return view('Modulos.administracion.persona.editar', compact("personas"));
    }

    public function postEditar(Request $request) {

        $per_identificacion = $request->input('per_identificacion');
        $per_id = $request->input('per_id');
        $per_nombres = $request->input('per_nombres');
        $per_apellidos = $request->input('per_apellidos');
        $per_telefono = $request->input('per_telefono');
        $per_direccion = $request->input('per_direccion');
        $ciu_id = $request->input('ciu_id');
        $per_correo = $request->input('per_correo');
        $per_fecha_nacimiento = $request->input('per_fecha_nacimiento');
        $sql="update persona set "
                . "per_identificacion='$per_identificacion', "
                . "per_nombres='$per_nombres', "
                . "per_apellidos='$per_apellidos', "
                . "per_telefono='$per_telefono', "
                . "per_direccion='$per_direccion', "
                . "ciu_id='$ciu_id', "
                . "per_correo='$per_correo', "
                . "per_fecha_nacimiento='$per_fecha_nacimiento' "
                . "WHERE per_id=$per_id";
      
        $persona= DB::update($sql);

        return Redirect::to(url('administracion/persona/listar'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    
    
//    public function store() {
//        
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function show($id) {
//        
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function update($per_identificacion) {
//        
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return Response
//     */
    public function destroy($per_identificacion) {
        
    }
}
