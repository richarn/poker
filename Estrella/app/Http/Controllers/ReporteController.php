<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){

    	return view('reporte.reporte');
    }
}
