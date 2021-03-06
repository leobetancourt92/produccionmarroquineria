<?php
namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;

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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCrear() {
        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);
        
        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);

        return view("Modulos.Administracion.empresa.crear",compact('objCiudad','objTipoCliente'));
    }

    public function postCrear(Request $request) {

        $emp_Nit            = $request->input('emp_Nit');
        $emp_razon_social   = $request->input('emp_razon_social');
        $emp_telefono       = $request->input('emp_telefono');
        $emp_direccion      = $request->input('emp_direccion');
        $ciu_id             = $request->input('ciu_id');
        $emp_contacto       = $request->input('emp_contacto');
        $emp_correo         = $request->input('emp_correo');
        $tip_cli_id         = $request->input('tip_cli_id');
		$emp_estado			= 1;	
 	       
        $sql = DB::insert(
                "INSERT INTO empresa "
                . "( "
                . " emp_id,  "
                . " emp_nit,  "
                . " emp_razon_social,   "
                . " emp_telefono,  "
                . " emp_direccion, "
                . " ciu_id, "
                . " emp_correo, "
                . " emp_contacto, "
                . " emp_estado, "
                . " tip_cli_id "                
                . ") "
                . "VALUES (?,?,?,?,?,?,?,?,?,?)", array(
            'DEFAULT',
            $emp_Nit,
            $emp_razon_social,
            $emp_telefono,
            $emp_direccion,
            $ciu_id,
            $emp_correo,
            $emp_contacto,
            $emp_estado,
            $tip_cli_id
        ));
        
        if ($sql <> 0):
            Alert::success('El Registro Fue Exitoso..!!!')->persistent('Cerrar')->autoclose(3000);
            return Redirect::to(url('empresa/listar'));
        else:
            echo "El Registro No Se Guardo";
        endif;
    }


    public function getListar() {

        $nit = "";
        if (isset($_GET['nit'])) {
            $nit = $_GET['nit'];
        }
        $where = "where 1 = 1";
        if (!empty($nit)) {
            
        }
        $empresas = DB::select("SELECT "
                        . "emp_id, "
                        . "emp_nit, "
                        . "emp_razon_social, "
                        . "emp_telefono, "
                        . "emp_direccion,"
                        . "emp_correo,"
                        . "emp_estado,"
                        . "emp_contacto"
                        . " FROM empresa "
                        . $where
        );

        return view('Modulos.Administracion.empresa.listar', compact("empresas", "nit"));
    }
	public function getVer($emp_id){

        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);
        
        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);
        
        $sql = "select * from empresa where emp_id=$emp_id";
        $empresas = \DB::select($sql);
        return view("Modulos.Administracion.empresa.show", compact('empresas','objCiudad','objTipoCliente'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEditar($emp_id) {
        if (is_null($emp_id)) {
            App::abort(404);
        }
        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);
		
		$sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);
        
        $empresas = DB::select("SELECT * FROM empresa WHERE emp_id={$emp_id}");
        return view('Modulos.Administracion.empresa.editar', compact("empresas","objCiudad",'objTipoCliente'));
    }
	public function postEditar(){
        $datos = \Request::all();
        $personas =\DB::select("UPDATE empresa SET emp_nit ='{$datos['emp_nit']}',emp_razon_social ='{$datos['emp_razon_social']}',
        						emp_telefono ='{$datos['emp_telefono']}',emp_direccion ='{$datos['emp_direccion']}',emp_correo='{$datos['emp_correo']}', 
        						emp_contacto='{$datos['emp_contacto']}',ciu_id='{$datos['ciu_id']}',tip_cli_id='{$datos['tip_cli_id']}' 
                                WHERE emp_id='".$datos['emp_id']."'");

        Alert::success('Persona Actualizada Con exito!')->persistent('Cerrar')->autoclose(3000);
        
        return Redirect::to(url('empresa/listar'));    
    }
    public function getDesactivar($emp_id){

        $sql = "UPDATE empresa SET emp_estado=0 WHERE emp_id=$emp_id";
        $personas = \DB::select($sql);
        return Redirect::to(url('empresa/listar'));
    }

    public function getActivar($emp_id){

        $sql = "UPDATE empresa SET emp_estado=1 WHERE emp_id=$emp_id";
        $personas = \DB::select($sql);
        return Redirect::to(url('empresa/listar'));
    }
	
}
?>

  