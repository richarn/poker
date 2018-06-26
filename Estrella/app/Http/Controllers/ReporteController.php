<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IngresoBebidasYOtros;
use App\IngresoComida;
use App\IngresoBillar;
use App\Pozo;
use App\TotalIngreso;
use App\CostoProducto;
use App\CierreSemana;
use App\Semana;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){

        $fecha = $request->get('fecha_reporteCos');
        //return response()->json($fecha);
        $get_productos = CostoProducto::select('*')
        ->where('fecha', 'LIKE', '%'.$fecha.'%')->get();

        $get_descr = CierreSemana::all();

        $suma_sem = CierreSemana::select('*')
        ->where('IdCierre', '>=', 0)->sum('total');


        return view('reporte.reporte',
         [
         'getproductos' => $get_productos,
         'get_descr' => $get_descr,
         'suma_sem' => $suma_sem
         ]); 


 
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


        $costo = CostoProducto::where('fecha', 'LIKE', '%'.$fecha.'%')
          ->sum('precio');        

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

                  

        $suma_total = ($rep_bebida + $rep_comida + $rep_billar + $rep_pozo)-$costo; 

        return response()->json($suma_total);

    }   

    public function reporte_costo(Request $request){
        $fecha = $request->get('fecha_rep');
        //return response()->json($fecha);
        $fecha_reporte = CostoProducto::where('fecha', 'LIKE', '%'.$fecha.'%')
          ->sum('precio');


        return response()->json($fecha_reporte);    
    }

    public function reporte_semana(Request $request){
        $fecha_sem = $request->get('fecha_rep');
        //$SUM = TotalIngreso::where('fecha', 'LIKE', '%'.$fecha_sem.'%')->sum('total_dia');
        //return response()->json($fecha_sem);
        
        $sum_week = TotalIngreso::select('*')
        ->where('fecha','<',$fecha_sem)->limit(7)
        ->get();

        // $total_xsem = TotalIngreso::select('total_dia')
        // ->where('fecha', '<', $fecha_sem)->limit(7);

        //SELECT CONCAT(DAY(fecha), '-', MONTH(fecha)), SUM(total_dia) FROM TotalIngreso
        //WHERE fecha <  '2017-05-04' GROUP BY fecha ORDER BY fecha DESC LIMIT 3;
 //       $array = [$sum_week, $total_xsem];
        return response()->json($sum_week);
    }

    public function lista_costo(Request $request){
        $fecha = $request->get('fecha_re');
        //return response()->json($fecha);
        $get_productos = CostoProducto::select('*')
        ->where('fecha', 'LIKE', '%'.$fecha.'%')->get();

        return response()->json($get_productos); 
     
           
    }   

    //realiza cierre del dia
    public function cierre_dia(Request $request){
        $fecha = $request->get('fecha_cierre');
        //return response()->json($fecha);
        $descri = $request->get('cierre_descri');
        $total_cierre = $request->get('totaldia');

        $ingre = TotalIngreso::select('*')
        ->where('fecha','LIKE', '%'.$fecha.'%')->sum('total_dia');

        $cierre_semana = new CierreSemana;

        $cierre_semana -> fecha = $fecha;
        $cierre_semana -> descripcion = $descri;
        $cierre_semana -> total = $ingre;
        $CierreSemana = $cierre_semana -> save();
        $idcierre = $cierre_semana -> IdCierre; 

        return response()->json(['success' => $CierreSemana,
            'idcierre' => $idcierre]);                
    }    

    public function sum_sema(Request $request){

        $fecha = $request->get('fecha_reporteSem');

        $sum = CierreSemana::select('*')
        ->where('fecha', '<=', $fecha)->sum('total');

        $semana_cierre = new Semana;
        $semana_cierre -> fecha = $fecha;
        $semana_cierre -> total = $sum;
        $semana_cierre -> save();

        $delete_all = CierreSemana::truncate();
        return response()->json($sum);
    }  

}

        