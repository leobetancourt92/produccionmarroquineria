<?php
/**
 * @Nombre: ${user}Luis Fernando Angulo Palacios
 * @Fecha:  12/06/2016
 * @Hora:  09:59 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */

namespace App\Http\Controllers\Modulos\Produccion\Color;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ColorController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return Response
     */
    public function __construct()
    {
        //	$this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view("Modulos.Layout.dashboard");
    }

    public function getCreate() {

        return view("Modulos.Layout.partials.content");
    }

    public function getListar() {

        return view("Modulos.Layout.partials.content");
    }


}