<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\User;


use App\Http\Requests\LoginRequest;

class LogController extends Controller
{
  public function __construct(){
	}


	public function index(Request $request) {
		return view('layouts.admin');
	}
   
	public function verifyLogin(Request $request) {
		$user = $request->get('user');
        $pass = $request->get('pass');
        //return response()->json($pass);

        $usuario = User::select("id","name", "password")
        ->where("name", "=", $user)->first();
        
        if ($user == $usuario->name && $pass == $usuario->password) {
            return response()->json(["user_id"=>$usuario->id]);
        }
        
        return response()->json("error", 500);
	}
}
