<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador01 extends Controller
{
    
    function guardar_datos(Request $request){
    	 $request->nombre;
    	 if($request->nombre=='Pedro'){
    	 	return 'Acceso prohibido';
    	 }else{
    	 	return 'Welcome';
    	 }
    }

}
