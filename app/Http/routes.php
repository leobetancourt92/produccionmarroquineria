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
    return view('plantilla.estructura');
});


Route::controllers([
    'administracion'=>'Modulos\Administracion\personaController',
    'produccion'=>'Modulos\Produccion\ProduccionController',
//    'Color'=>'Modulos\Produccion\Color\ColorController'
]);




