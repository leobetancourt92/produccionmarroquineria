<?php


namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class EmpresaController extends Controller {

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
    public function getIndex() {
        return view("plantilla.estructura");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCrear() {
        return view("Modulos.administracion.empresa.crear");
    }

    public function postCrear(Request $request) {
        $emp_Nit = $request->input('emp_Nit');
        $emp_razon_social = $request->input('emp_razon_social');
        $emp_telefono = $request->input('emp_telefono ');
        $emp_direccion = $request->input('emp_direccion');
        $ciu_id = $request->input('ciu_id');
        $emp_contacto = $request->input('emp_contacto');
        $emp_telefono_contacto = $request->input('emp_telefono_contacto');
        $emp_correo = $request->input('emp_correo');


        DB::insert(
                "INSERT INTO empresa "
                . "( "
                . " emp_Nit,  "
                . " emp_razon_social,   "
                . " emp_telefono,  "
                . " emp_direccion, "
                . " emp_correo, "
                . " emp_contacto, "
                . " emp_telefono_contacto "
                . ") "
                . "VALUES (?,?,?,?,?,?,?)", array(
            $emp_Nit,
            $emp_razon_social,
            $emp_telefono,
            $emp_direccion,
            $ciu_id,
            $emp_contacto,
            $emp_telefono_contacto,
            $emp_correo
        ));
        return Redirect::to(url('administracion/empresa/listar'));
    }


      public function getListar() {
        $nit = "";
        if (isset($_GET['nit'])) {
            $nit = $_GET['nit'];
        }
        $where = "where 1 = 1";
        if (!empty($nit)) {
            
        }
        $personas = DB::select("SELECT "
                        . "emp_Nit, "
                        . "emp_razon_social, "
                        . "emp_telefono, "
                        . "emp_direccion,"
                        . "emp_correo,"
                        . "emp_contacto"
                        . " FROM empresa "
                        . $where
        );
        return view('Modulos.administracion.empresa.listar', compact("personas", "Nit"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
public function getEditar($nit) {
        $nit;
        if (is_null($nit)) {
            App::abort(404);
        }
        $personas = DB::select("SELECT * FROM empresa WHERE emp_nit={$nit}");
        return view('Modulos.administracion.empresa.editar', compact("personas"));
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
//    public function update($per_nit) {
//        
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function destroy($per_nit) {
//        
//    }
}
