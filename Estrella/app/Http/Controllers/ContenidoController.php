<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
	
use App\CostoProducto;	
use App\Pozo;
use App\Billar;
use App\IngresoBillar;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContenidoRequest;

class ContenidoController extends Controller
{
   public function __construct(){

   }

	public function index(Request $request) {

		$billar = Billar::all();



		return view('inicio.index',[
			"billar" => $billar
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
		$Pozo_id = $Pozo -> IdPozo;
		$Pozo -> total_pozo = $pozo_total;
		$pozo_ingreso = $Pozo -> save();
	
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
		$Billar_id = $Billar -> IdIngresoBillar;
		$Billar_ingreso = $Billar -> save();

		return response()->json(['success' => $Billar_ingreso,
			'Billar_id' =>  $Billar_id]);
	}
}
