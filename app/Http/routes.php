<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('Modulos.Usuarios.Usuario.login');
});


Route::controllers([
    'administracion'=>'Modulos\Administracion\personaController',
    'producto'=>'Modulos\Produccion\ProductoController',
    
    /*Modulo de Produccion*/
    'talla'=>'Modulos\Produccion\tallaController',
//    'Color'=>'Modulos\Produccion\Color\ColorController'
    /*Modulo de Usuarios*/

]);




