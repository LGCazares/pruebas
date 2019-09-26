<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('maq02', function () {
    return view('bienvenido.maqueta02');
});
Route::get('maq01', 'Controlador01@maqueta01')->name('maq01');


/*Datos */
Route::get('/', 'Controlador01@inicio')->name('/');

Route::post('guardar', 'Controlador01@guardar_datos')->name('guardar');



/*Materias*/
Route::get('materias', 'Controlador01@materias')->name('materias');

Route::post('guardar_materias', 'Controlador01@guardar_materias')->name('guardar_materias');
