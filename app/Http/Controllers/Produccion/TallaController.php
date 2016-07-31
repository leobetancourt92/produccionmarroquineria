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

    }

    public function getCreate() {

        return view("Modulos.Produccion.Talla.crear");
    }

    public function getListar() {

        return view("Modulos.Layout.partials.content");
    }


}