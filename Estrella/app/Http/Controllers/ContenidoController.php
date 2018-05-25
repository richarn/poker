<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
	
use App\CostoProducto;	
use App\Pozo;
use App\Billar;
use App\IngresoBillar;
use App\BebidasYOtros;
use App\Comida;
use App\IngresoBebidasYOtros;
use App\IngresoComida;
use App\TotalIngreso;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContenidoRequest;

class ContenidoController extends Controller
{
   public function __construct(){

}

	public function index(Request $request) {

		$billar = Billar::all();

		$bebidasYOts = BebidasYOtros::all();
		$comidas_ = Comida::all();

		return view('inicio.index',[
			"billar" => $billar,
			"bebidasYOts" => $bebidasYOts,
			"comidas_" => $comidas_
			]);
	}
	//compre de productos
    public function store_compra (Request $request){
	   
       //$compra = CostoProducto::all();

       $compra_pro = $request->get('compra');
       $fecha = $request->get('fecha_compra');
       
       //return response()->json([$obser, $usuario]);
       $compras = new CostoProducto;

       $compras -> monto = $compra_pro;
       $compras -> fecha = $fecha;
       $compras_id = $compras-> IdCostoProductos;
       $compra_monto = $compras -> save();
       
	   return response()->json(['success' => $compra_monto, 
	   'compra_id' => $compras_id]);	       
       
    }	


	//pozo

	public function store_pozo(Request $request){

		$pozo = $request->get('pozo');
		$propina  = $request->get('propina');
		$fecha_pozo = $request->get('fecha_pozo');
		$pozo_total = $pozo + $propina;

		$Pozo = new Pozo;

		$Pozo -> monto = $pozo;
		$Pozo -> propina = $propina;
		$Pozo -> fecha = $fecha_pozo;
		$Pozo -> total_pozo = $pozo_total;
		$pozo_ingreso = $Pozo -> save();
		$Pozo_id = $Pozo -> IdPozo;
	
		$query_total= new TotalIngreso();
		$query_total->fecha = $fecha_pozo;
		$query_total->IdPozo = $Pozo_id;
		$query_total->save();

		return response()->json(['success' => $pozo_ingreso,
			'pozo_id' => $Pozo_id]);
	}

	//billar 

	public function store_Ingresobillar(Request $request){

		$billar_tipo = $request->get('billar_des');
		$billar_precio = $request->get('billar_precio');
		$fecha_billar = $request->get('fecha_billar');

		$Billar = new IngresoBillar;

		$Billar -> descripcion = $billar_tipo;
		$Billar ->  precio = $billar_precio;
		$Billar -> fecha = $fecha_billar;
		$Billar -> totalBillar = $billar_precio;
		$Billar_ingreso = $Billar -> save();
		$Billar_id = $Billar -> IdIngresoBillar;

		$query_total= new TotalIngreso();
		$query_total->fecha = $fecha_billar;
		$query_total->IdIngresoBillar = $Billar_id;
		$query_total->save();
		
		return response()->json(['success' => $Billar_ingreso,
			'Billar_id' =>  $Billar_id]);
	}
	//registro de bebidas y otros
	public function store_BebidasYOtros(Request $request){
		$descri_bebida = $request->get('descri_bebida');
		$cantidad_bebida = $request->get('cantidad_bebida');
		$precio_bebida = $request->get('precio_bebida');
		$fechaR_bebida = $request->get('fechaR_bebida');

		$bebidas = new BebidasYOtros;

		$bebidas -> descripcion = $descri_bebida;
		$bebidas -> cantidad = $cantidad_bebida;
		$bebidas -> precio = $precio_bebida;
		$bebidas -> fecha = $fechaR_bebida;
		$bebidas -> IdIngresoBebidasYOtros = 1;
		$bebidas_id = $bebidas -> IdBebidasYOtros;
		$bebidas_re = $bebidas -> save();

		return response()->json(['success' => $bebidas_re,
			'bebidas_id' => $bebidas_id]);
	}

//registro de comida

	public function store_comestibles(Request $request){
        $descri_comida = $request->get('descri_comida');
        $cantidad_comida = $request->get('cantidad_comida');
        $precio_comida = $request->get('precio_comida');
        $fechaR_comida = $request->get('fechaR_comida');

        $comidas = new Comida;

        $comidas -> descripcion = $descri_comida;
        $comidas -> cantidad = $cantidad_comida;
        $comidas -> precio = $precio_comida;
        $comidas -> fecha = $fechaR_comida;
        $comidas -> IdIngresoComida = 1;
        $comidas_id = $comidas -> IdComida;
        $comidas_re = $comidas -> save();

        return response()->json(['success' => $comidas_re,
        'comidas_id' => $comidas_id]);		
	}
	//registro de venta bebida
	public function store_ventaBebida(Request $request){
		$venta_bebida = $request->get('venta_bebida');
		$ventaB_cantidad = $request->get('ventaB_cantidad');
		$ventaB_precio = $request->get('ventaB_precio');
		$fechaventa_bebida = $request->get('fechaventa_bebida');
		$precio_total_venta = $ventaB_cantidad * $ventaB_precio;

        $bebi = BebidasYOtros::select('cantidad')
        ->where('descripcion', 'LIKE', '%'.$venta_bebida.'%')
        ->first();

 		$total_cantidadb = $bebi->cantidad - $ventaB_cantidad;
      

		// Conseguimos el objeto
		$query_cantb=BebidasYOtros::select('*')
		->where('descripcion', 'LIKE', '%'.$venta_bebida.'%')
		->first();

		// Si existe
		if($query_cantb->descripcion == $venta_bebida){
		   // Seteamos un nuevo titulo
		   $query_cantb->cantidad = $total_cantidadb;

		   // Guardamos en base de datos
		   $query_cantb->save();
		}


		//return response()->json($precio_total_venta);
		$VentaBebida = new IngresoBebidasYOtros;

		$VentaBebida -> descripcion = $venta_bebida;
		$VentaBebida -> cantidad = $ventaB_cantidad;
		$VentaBebida -> precio = $ventaB_precio;
		$VentaBebida -> fecha = $fechaventa_bebida;
		$VentaBebida -> precio_total = $precio_total_venta;
		$VentaBebida_ingreso = $VentaBebida -> save();
		$VentaBebida_id = $VentaBebida -> IdIngresoBebidasYOtros;

		$query_total= new TotalIngreso();


		$query_total->fecha = $fechaventa_bebida;
		$query_total->IdIngresoBebidasYOtros = $VentaBebida_id;

		$query_total->save();

		return response()->json(['success' => $VentaBebida_ingreso,
		'VentaBebida_id' => $VentaBebida_id]);
	}

//registro de venta comida
	public function store_ventaComida(Request $request){
		$venta_comida = $request->get('venta_comida');
		$ventaC_cantidad = $request->get('ventaC_cantidad');
		$ventaC_precio = $request->get('ventaC_precio');
		$fechaventa_comida = $request->get('fechaventa_comida');
		$precio_total_ventaC = $ventaC_cantidad * $ventaC_precio;

        $comi = Comida::select('cantidad')
        ->where('descripcion', 'LIKE', '%'.$venta_comida.'%')
        ->first();

 		$total_cantidad = $comi->cantidad - $ventaC_cantidad;
      

		// Conseguimos el objeto
		$query_cant=Comida::select('*')
		->where('descripcion', 'LIKE', '%'.$venta_comida.'%')
		->first();

		// Si existe
		if($query_cant->descripcion == $venta_comida){
		   // Seteamos un nuevo titulo
		   $query_cant->cantidad = $total_cantidad;

		   // Guardamos en base de datos
		   $query_cant->save();
		}


        //return response()->json(["Datos actualizados", $array]);        

        //return response()->json($total_cantidad);	

		//return response()->json($precio_total_venta);
		$VentaComida = new IngresoComida;

		$VentaComida -> descripcion = $venta_comida;
		$VentaComida -> cantidad = $ventaC_cantidad;
		$VentaComida -> precio = $ventaC_precio;
		$VentaComida -> fecha = $fechaventa_comida;
		$VentaComida -> precio_total_comida = $precio_total_ventaC;
		$VentaComida_ingreso = $VentaComida -> save();
		$VentaComida_id = $VentaComida -> IdIngresoComida;


		$query_total= new TotalIngreso();


		$query_total->fecha = $fechaventa_comida;
		$query_total->IdIngresoComida = $VentaComida_id;

		$query_total->save();



		return response()->json(['success' => $VentaComida_ingreso,
		'VentaComida_id' => $VentaComida_id]);


	}


}
