<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Produccion\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;
use Auth;

class InventarioController extends Controller {

  public function getCreate() {

    date_default_timezone_set('America/Bogota');
    $person   = \DB::select("SELECT per_id, per_nombres, per_apellidos FROM persona WHERE per_estado = 1");
    $business = \DB::select("SELECT emp_id, emp_nombres FROM empresa WHERE emp_estado = 1");

    $sql = "select p.pro_id, p.pro_descripcion, p.pro_costo, p.pro_cantidad, t.tal_dimension, c.col_descripcion, pro_estado from producto p
                    join color c
                    on c.col_id = p.col_id
                    join talla t
                    on t.tal_id = p.tal_id ORDER by pro_id";

    $products = \DB::select($sql);

    return view("Modulos.Inventario.OrdenCompra.crear", compact('products', 'person', 'business'));
  }

  public function getBodega() {
    $sql= "select b.bod_id, p.pro_id,p.pro_descripcion,b.bod_total from bodega b JOIN producto p ON b.pro_id= p.pro_id";
    $bodega = \DB::select($sql);
    return view("Modulos.Inventario.Bodega.listar", compact('bodega'));
  }

  public function postCreate(Request $request) {

    foreach ($request->product as $key => $val) {

      if (isset($val[0])) {

        DB::table('orden_de_compra')->insert([
          'ord_com_fecha'  => date('Y-m-d'),
          'ord_com_total'  => $val[1],
          'ord_com_estado' => 0,
          'ord_tipo_cli'   => $request->entityId,
        ]);

        $maxId = DB::table('orden_de_compra')->max('ord_com_id');

        DB::table('detalle_orden_de_compra')->insert([
          'pro_id'           => $key,
          'ord_com_id'       => $maxId,
          'det_com_cantidad' => $val[0],
          'det_com_etapa'    => '',
        ]);

        DB::table('producto')
          ->where('pro_id', $key)
          ->update(['pro_cantidad' => $val[2]]);
      }
    }

    Alert::success('Orden de compra registrada')->persistent('Cerrar')->autoclose(3000);
    return Redirect::to(url('inventario/listar'));
  }

  public function getListar() {

    if (Auth::user()->nombre != 'coordinador') {
      Alert::success('No eres el coordinador')->persistent('Cerrar')->autoclose(3000);
      return Redirect::to(url('/home'));
    }

    $purchaseOrders = DB::table('orden_de_compra')
      ->join('detalle_orden_de_compra', 'orden_de_compra.ord_com_id', '=', 'detalle_orden_de_compra.ord_com_id')
      ->select('orden_de_compra.*', 'detalle_orden_de_compra.*')
      ->get();

    $products = DB::table('producto')->select('pro_id', 'pro_descripcion')->get();
    $persons  = DB::table('persona')->select('per_id', 'per_nombres', 'per_apellidos')->get();
    $business = DB::table('empresa')->select('emp_id', 'emp_nombres')->get();

    return view("Modulos.Inventario.OrdenCompra.listar", [
      'purchaseOrders' => $purchaseOrders,
      'products'       => $products,
      'persons'        => $persons,
      'business'       => $business,
    ]);
  }

  public function getState(Request $request) {

    DB::table('orden_de_compra')
      ->where('ord_com_id', $request->id)
      ->update(['ord_com_estado' => 1]);

    Alert::success('Orden de compra aprobada')->persistent('Cerrar')->autoclose(3000);
    return Redirect::to(url('inventario/listar'));
  }

}
