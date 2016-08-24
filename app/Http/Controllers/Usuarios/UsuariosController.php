<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UsuariosController extends Controller {

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
    return view("Modulos.Usuarios.crear");
  }

  public function postCrear() {

    $datos      = \Request::all();
    $nombre     = $datos['nombre'];
    $apellido   = $datos['apellido'];
    $email      = $datos['email'];
    $contraseña = $datos['pass'];

    $objUser           = new User($datos);
    $objUser->nombre   = $nombre;
    $objUser->apellido = $apellido;
    $objUser->email    = $email;
    $objUser->password = $contraseña;
    $objUser->estado   = 1;
    $objUser->save();
    return \Redirect::to('usuario/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
  }

  public function getListar() {
    $objUsuario = \DB::select("SELECT * FROM usuarios");
    return view("Modulos.Usuarios.listar", compact("objUsuario"));
  }

  public function getEditar($id) {

    $objUsuario = \DB::select("SELECT * FROM usuarios WHERE id = $id");
    return view("Modulos.Usuarios.editar", compact("objUsuario"));
  }

  public function postEditar() {
    $post    = \Request::all();
    $usuario = User::findOrFail($post["id"]);
    $usuario->fill(\Request::all());
    $usuario->save();
    return \Redirect::to('usuario/listar');
  }

  public function getDesactivar($id) {

    $sql       = "update usuarios set estado=0 where id=$id";
    $productos = \DB::select($sql);
    return Redirect::to(url('usuario/listar'));
  }

  public function getActivar($id) {

    $sql       = "update usuarios set estado=1 where id=$id";
    $productos = \DB::select($sql);
    return Redirect::to(url('usuario/listar'));
  }

}
