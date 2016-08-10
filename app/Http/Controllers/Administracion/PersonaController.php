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
		$sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);
		
		$sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);

        return view("Modulos.Administracion.persona.crear", compact('objCiudad','objTipoCliente'));
    }

    public function postCrear(Request $request) {
        $per_id                     = "DEFAULT";
        $per_telefono               = $request->input('per_telefono');
        $per_direccion              = $request->input('per_direccion');
        $per_ciu_id_fk              = $request->input('ciu_id');
        $per_correo                 = $request->input('per_correo');
        $per_fecha_nacimiento       = $request->input('per_fecha_nacimiento');
        $tip_cli_id					= $request->input('tip_cli_id');
		$per_estado 				= "ACTIVO";
  		
        $sql = DB::insert(
                "INSERT INTO persona "
                . "( "
                . " per_id, "
                . " per_telefono, "
                . " per_direccion, "
                . " per_ciu_id_fk, "
                . " per_correo, "
                . " per_fecha_nacimiento, "
                . " per_estado, "
                . " tip_cli_id "
                . ") "
                . "VALUES (?,?,?,?,?,?,?,?)", array(
                	$per_id,
                    $per_telefono,
                    $per_direccion,
                    $per_ciu_id_fk,
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
       	$sql = "SELECT * FROM tipo_cliente tc
       			INNER JOIN persona p ON p.tip_cli_id = tc.tip_cli_id
       			INNER JOIN ciudad c ON c.ciu_id = p.per_ciu_id_fk";
        $personas = \DB::select($sql);

        return view('Modulos.Administracion.persona.listar', compact("personas"));
    }
	public function getVer($per_id){

        $sql = "SELECT * FROM color";
        $objColor = \DB::select($sql);
		
        $sql = "select * from producto where pro_id=$pro_id";
        $productos = \DB::select($sql);
        return view("Modulos.Produccion.Productos.show", compact('productos','objColor', 'objTalla'));
    }

    /**
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
		/*
		 * */
}
