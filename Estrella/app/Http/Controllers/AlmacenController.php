<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BebidasYOtros;
use App\Comida;

class AlmacenController extends Controller
{
	public function __construct(){

	}

	public function index(){

		$bebidasYOtros = BebidasYOtros::all();
		$comidas = Comida::all();

    	return view('almacen.almacen',
    	 [
    	 'bebidasYOtros' => $bebidasYOtros,
    	 'comidas' => $comidas
    	 ]);
	}
}
