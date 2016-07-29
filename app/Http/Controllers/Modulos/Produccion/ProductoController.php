<?php
/**
 * @Nombre: ${user}Luis Fernando Angulo Palacios
 * @Fecha:  12/06/2016
 * @Hora:  09:49 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */
namespace App\Http\Controllers\Modulos\Produccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;


class ProductoController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return Response
     */
     public function __construct() {
        $this->middleware('auth');
        //$this->middleware('control_menu');   

    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */

    public function getCreate() {
        $sql = "SELECT * FROM color";
        $objColor = \DB::select($sql);

        $sql = "SELECT * FROM talla";
        $objTalla = \DB::select($sql);

        return view("Modulos.Produccion.Productos.create", compact('objColor', 'objTalla'));
    }

    public function postCreate(Request $request){

        $descripcion=$request->input('descripcion');
        $costo=$request->input('costo');
        $cantidad=$request->input('cantidad');
        $talla=$request->input('talla');
        $color=$request->input('color');

      $sql= DB::insert("INSERT INTO "
            . "producto (pro_descripcion, pro_costo, pro_cantidad, tal_id, col_id) "
            . "VALUES(?,?,?,?,?)",
            array(
                $descripcion,
                $costo,
                $cantidad,
                $talla,
                $color
            ));


            Alert::success('Producto Insertado Con exito!')->persistent('Cerrar')->autoclose(3000);
            return Redirect::to(url('producto/listar'));

    }

    public function getListar(){
        $sql = "select p.pro_id, p.pro_descripcion, p.pro_costo, p.pro_cantidad, t.tal_dimension, c.col_descripcion, pro_estado from producto p
                    join color c
                    on c.col_id = p.col_id
                    join talla t
                    on t.tal_id = p.tal_id ORDER by pro_id";
        $productos = \DB::select($sql);
        return view("Modulos.Produccion.Productos.listar", compact('productos'));
    }

    public function getEditar($pro_id){

        $sql = "SELECT * FROM color";
        $objColor = \DB::select($sql);

        $sql = "SELECT * FROM talla";
        $objTalla = \DB::select($sql);

        $sql = "select * from producto where pro_id=$pro_id";
        $productos = \DB::select($sql);
        return view("Modulos.Produccion.Productos.editar", compact('productos','objColor', 'objTalla'));
    }

    public function getDesactivar($pro_id){

        $sql = "update producto set pro_estado=0 where pro_id=$pro_id";
        $productos = \DB::select($sql);
        return Redirect::to(url('producto/listar'));
    }

    public function getActivar($pro_id){

        $sql = "update producto set pro_estado=1 where pro_id=$pro_id";
        $productos = \DB::select($sql);
        return Redirect::to(url('producto/listar'));
    }

    public function getVer($pro_id){

        $sql = "SELECT * FROM color";
        $objColor = \DB::select($sql);

        $sql = "SELECT * FROM talla";
        $objTalla = \DB::select($sql);

        $sql = "select * from producto where pro_id=$pro_id";
        $productos = \DB::select($sql);
        return view("Modulos.Produccion.Productos.show", compact('productos','objColor', 'objTalla'));
    }

    public function postEditar(){
        $datos = \Request::all();
        $productos =\DB::select("update producto SET pro_descripcion ='".$datos['descripcion']."',pro_costo='".$datos['costo']."', pro_cantidad='".$datos['cantidad']."', tal_id='".$datos['talla']."', col_id='".$datos['color']."' where pro_id='".$datos['id']."'");

        Alert::success('Producto Actualizado Con exito!')->persistent('Cerrar')->autoclose(3000);
        
        return Redirect::to(url('producto/listar'));

    }


}