<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TallaController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return Response
   */
  public function __construct() {
    //	$this->middleware('guest');
  }

  /**
   * Show the application welcome screen to the user.
   *
   * @return Response
   */
  public function getIndex() {
    
  }

  public function getCrear() {
    $sql              = "SELECT * FROM tipo_producto";
    $objTipoProductos = \DB::select($sql);

    return view("Modulos.Produccion.Talla.crear", compact('objTipoProductos'));
  }

  public function postCrear() {

    $datos          = \Request::all();
    $dimencion      = $datos['dimension'];
    $tipoProductoId = $datos['tipo_producto'];
//        dd($datos);
    \DB::insert(
      "INSERT INTO talla "
      . "( "
      . " tal_dimension,  "
      . " tip_pro_id  "
      . ") "
      . "VALUES (?,?)", array(
      $dimencion,
      $tipoProductoId,
    ));
    return \Redirect::to('talla/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
  }

  public function getListar() {
    $objTalla = \DB::select("SELECT * FROM talla");
    return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
  }

  public function getEditar($id) {

    $sql              = "SELECT * FROM tipo_producto";
    $objTipoProductos = \DB::select($sql);

    $objTalla = \DB::select("SELECT * FROM talla WHERE tal_id = $id");
    return view("Modulos.Produccion.Talla.editar", compact("objTalla", 'objTipoProductos'));
  }

  public function postEditar() {
    $datos    = \Request::all();
    $objTalla = \DB::select("UPDATE talla SET tal_dimension = '" . $datos['dimension'] . "'  WHERE tal_id = " . $datos['id'] . "");
    return \Redirect::to('talla/listar');
  }

  public function getEliminar($id) {
    $objTalla = \DB::select("SELECT * FROM talla WHERE tal_id = $id");
    return view("Modulos.Produccion.Talla.eliminar", compact("objTalla"));
  }

  public function postEliminar() {
    $datos    = \Request::all();
    $objTalla = \DB::select("DELETE FROM talla WHERE tal_id = '" . $datos['id'] . "'");
    return \Redirect::to('talla/listar');
  }

  public function getDesactivar($id) {

    $sql       = "update talla set tal_estado=0 where tal_id=$id";
    $productos = \DB::select($sql);
    return Redirect::to(url('talla/listar'));
  }

  public function getActivar($id) {

    $sql       = "update talla set tal_estado=1 where tal_id=$id";
    $productos = \DB::select($sql);
    return Redirect::to(url('talla/listar'));
  }

}
