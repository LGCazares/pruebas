<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Materia;

class Controlador01 extends Controller
{
	public function maqueta01(){
		return view('bienvenido.maqueta01');
	}
    
/*DATOS*/
    function inicio(){
    	$personas=Persona::get();
    	return view('bienvenido.inicio',compact('personas'));
    }

    function guardar_datos(Request $request){
    	$nueva_persona=Persona::create($request->all());
    	return redirect()->route('/');	 
    }


/*MATERIAS*/

    function materias(){
    	$materias=Materia::get();
    	return view('bienvenido.materias',compact('materias'));
    }

     function guardar_materias(Request $request){
    	$nueva_materia=Materia::create($request->all());
    	return redirect()->route('materias');	 
    }

}