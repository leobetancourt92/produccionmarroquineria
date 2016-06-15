<?php
/**
 * @Nombre: ${user}Mercedes Ortiz Cardenas
 * @Fecha:  12/06/2016
 * @Hora:  09:49 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */
namespace App\Http\Controllers\Modulos\Administracion;

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
    public function getIndex()
    {
        return view("plantilla.estructura");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCrear() {

        return view("Modulos.Administracion.persona.crear");
    }

    public function postCrear(Request $request) {
        $per_id                     = $request->input('per_id');
        $per_identificacion         = $request->input('per_identificacion');
        $per_nombres                = $request->input('per_nombres');
        $per_apellidos              = $request->input('per_apellidos');
        $per_telefono               = $request->input('per_telefono');
        $per_direccion              = $request->input('per_direccion');
        $per_ciu_id_fk              = $request->input('ciu_id_fk');
        $per_correo                 = $request->input('per_correo');
        $per_fecha_nacimiento       = $request->input('per_fecha_nacimiento');
        $per_id_tipopersona_fk     = $request->input('per_id_tipopersona_fk');

        DB::insert(
                "INSERT INTO persona "
                . "( "
                . " per_id,  "
                . " per_identificacion,  "
                . " per_nombres,   "
                . " per_apellidos,  "
                . " per_telefono, "
                . " per_direccion, "
                . " per_ciu_id_fk', "
                . " per_correo, "
                . " per_fecha_nacimiento, "
                . " per_id_tipopersona_fk, "
                . ") "
                . "VALUES (?,?,?,?,?,?,?,?,?,?)", array(
                    $per_id,
                    $per_identificacion,
                    $per_nombres,
                    $per_apellidos,
                    $per_telefono,
                    $per_direccion,
                    $per_ciu_id_fk,
                    $per_correo,
                    $per_fecha_nacimiento,
                    $per_tipopersona_fk
        ));
        return view("Modulos.Layout.partials.content");

    }

//    public function getListar() {
//        $identificacion = "";
//        if (isset($_GET['identificacion'])) {
//
//            $identificacion = $_GET['identificacion'];
//        }
//        $where = "where 1 = 1";
//        if (!empty($identificacion)) {
//            $where = " where per_identificacion = " . $identificacion;
//        }
//        $personas = DB::select("SELECT "
//                        . "per_identificacion, "
//                        . "per_primer_nombre, "
//                        . "per_segundo_nombre, "
//                        . "per_primer_apellido, "
//                        . "per_segundo_apellido, "
//                        . "per_telefono,"
//                        . "per_correo,"
//                        . "per_genero"
//                        . " FROM persona "
//                        . $where
//        );
//
//        return view('personas.listar', compact("personas", "identificacion"));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return Response
//     */
////    public function getEditar($identificacion) {
////        $identificacion = User::find(identificacion);
////        if (is_nul($identificacion)) {
////            App::abort(404);
////        }
////        return view('personas.listar', compact("personas", "identificacion"));
////    }
////
////    /**
////     * Store a newly created resource in storage.
////     *
////     * @return Response
////     */
////    public function store() {
////        //
////    }
////
////    /**
////     * Display the specified resource.
////     *
////     * @param  int  $id
////     * @return Response
////     */
////    public function show($id) {
////        //
////    }
////
////    /**
////     * Update the specified resource in storage.
////     *
////     * @param  int  $id
////     * @return Response
////     */
////    public function update($per_identificacion) {
////        //
////    }
////
////    /**
////     * Remove the specified resource from storage.
////     *
////     * @param  int  $id
////     * @return Response
////     */
////    public function destroy($per_identificacion) {
////        //
////    }

}
