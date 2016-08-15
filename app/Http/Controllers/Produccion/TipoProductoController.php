<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TipoProductoController extends Controller {




    public function getCrear() {

        return view("Modulos.Produccion.TipoProducto.crear");

    }

    public function postCrear() {

        $datos = \Request::all();
        $descripcion = $datos['descripcion'];
        \DB::insert(
            "INSERT INTO tipo_producto "
            . "( "
            . " tip_descripcion "
            . ") "
            . "VALUES (?)", array(
            $descripcion,

        ));
        return  \Redirect::to('tipo/listar');
    }

    public function getListar() {
        $objTipoPro = \DB::select("SELECT * FROM tipo_producto");

        return view("Modulos.Produccion.TipoProducto.listar", compact("objTipoPro"));
    }

    public function getEditar($id){

        $objTipoPro = \DB::select("SELECT * FROM tipo_producto WHERE tip_pro_id = $id");
        return view("Modulos.Produccion.TipoProducto.editar", compact('objTipoPro'));
    }

    public function postEditar(){
        $datos = \Request::all();
        $objTipoPro = \DB::select(" UPDATE tipo_producto SET tip_descripcion = '".$datos['descripcion']."'  WHERE tip_pro_id= '".$datos['id']."'");
        return  \Redirect::to('tipo/listar');
    }

    public function getDesactivar($tip_pro_id){

        $sql = "update tipo_producto set tip_estado=0 where tip_pro_id=$tip_pro_id";
        $productos = \DB::select($sql);
        return Redirect::to(url('tipo/listar'));
    }

    public function getActivar($tip_pro_id){

        $sql = "update tipo_producto set tip_estado=1 where tip_pro_id=$tip_pro_id";
        $productos = \DB::select($sql);
        return Redirect::to(url('tipo/listar'));
    }



}