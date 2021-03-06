<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{nombre?}', function ($nombre=null) {

    if($nombre){
        return view('welcome',['nombre'=>$nombre]);    
    } else {
        $nombre = "desconocido";
        return view('welcome',['nombre'=>$nombre]);    
    }
});
Route::namespace("App\\Http\\Controllers")->group(function () {
    Route::resource('/profesiones/profesion','ProfesionesController');
});
