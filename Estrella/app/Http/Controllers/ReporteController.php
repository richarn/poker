<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IngresoBebidasYOtros;
use App\IngresoComida;
use App\IngresoBillar;
use App\Pozo;
use App\TotalIngreso;

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

    public function reporte_Pozo(Request $request){
      $fecha = $request->get('fecha_rep');
      //return response()->json($fecha);
        $fecha_reporte = Pozo::where('fecha', 'LIKE', '%'.$fecha.'%')
          ->sum('total_pozo');
        return response()->json($fecha_reporte);
    }


    public function reporte_total(Request $request){
        $fecha = $request->get('fecha_rep');

        $rep_bebida = TotalIngreso::join(
            'IngresoBebidasYOtros', 'IngresoBebidasYOtros.IdIngresoBebidasYOtros', '=',
            'TotalIngreso.IdIngresoBebidasYOtros')
            ->select('IngresoBebidasYOtros.fecha', 'IngresoBebidasYOtros.precio_total')
            ->where('IngresoBebidasYOtros.fecha', 'LIKE', '%'.$fecha.'%')
            ->sum('IngresoBebidasYOtros.precio_total');        
            //return response()->json($rep_bebida);

        $rep_comida = TotalIngreso::join(
            'IngresoComida', 'IngresoComida.IdIngresoComida', '=',
            'TotalIngreso.IdIngresoComida')
            ->select('IngresoComida.fecha', 'IngresoComida.precio_total_comida')
            ->where('IngresoComida.fecha', 'LIKE', '%'.$fecha.'%')
            ->sum('IngresoComida.precio_total_comida');        
            //return response()->json($rep_comida); 

        $rep_billar = TotalIngreso::join(
            'IngresoBillar', 'IngresoBillar.IdIngresoBillar', '=',
            'TotalIngreso.IdIngresoBillar')
            ->select('IngresoBillar.fecha', 'IngresoBillar.totalBillar')
            ->where('IngresoBillar.fecha', 'LIKE', '%'.$fecha.'%')
            ->sum('IngresoBillar.totalBillar');        
            //return response()->json($rep_billar);

        $rep_pozo = TotalIngreso::join(
            'Pozo', 'Pozo.IdPozo', '=','TotalIngreso.IdIngresoBillar')
            ->select('Pozo.fecha', 'Pozo.total_pozo')
            ->where('Pozo.fecha', 'LIKE', '%'.$fecha.'%')
            ->sum('Pozo.total_pozo');        
            //return response()->json($rep_pozo);

        $total_dia = TotalIngreso::all();            

        $suma_total = $rep_bebida + $rep_comida + $rep_billar + $rep_pozo; 
        return response()->json($suma_total);

    }   

}
