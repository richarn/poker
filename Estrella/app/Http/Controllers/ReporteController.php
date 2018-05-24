<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IngresoBebidasYOtros;
use App\IngresoComida;
use App\IngresoBillar;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class ReporteController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){

    	return view('reporte.reporte');
    }
   
   	public function reporte_bebida(Request $request){
    	$fecha = $request->get('fecha_rep');
    	//return response()->json($fecha);
      	$fecha_reporte = IngresoBebidasYOtros::where('fecha', 'LIKE', '%'.$fecha.'%')
         	->sum('precio_total');
      	return response()->json($fecha_reporte);
	 }    

    public function reporte_comida(Request $request){
      $fecha = $request->get('fecha_rep');
      //return response()->json($fecha);
        $fecha_reporte = IngresoComida::where('fecha', 'LIKE', '%'.$fecha.'%')
          ->sum('precio_total_comida');
        return response()->json($fecha_reporte);
   }

    public function reporte_billar(Request $request){
      $fecha = $request->get('fecha_rep');
      //return response()->json($fecha);
        $fecha_reporte = IngresoBillar::where('fecha', 'LIKE', '%'.$fecha.'%')
          ->sum('totalBillar');
        return response()->json($fecha_reporte);
   }

}
