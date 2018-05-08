<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidoController extends Controller
{
   public function __construct(){

   }



	public function index(Request $request) {
		return view('inicio.index');
	}
}
