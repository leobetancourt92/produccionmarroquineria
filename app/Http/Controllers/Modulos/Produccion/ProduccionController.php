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

class ProduccionController extends Controller {

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
        return view("template.dashboard");
    }

    public function getCreate() {

        return view("Modulos.Produccion.Productos.create");
    }

    public function getListar() {

        return view("template.partials.content");
    }


}