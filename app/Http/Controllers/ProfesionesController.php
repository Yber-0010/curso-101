<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesiones;

class ProfesionesController extends Controller
{
    public function index()
    {
        $profesiones = Profesiones::all();/* orderBy('id', 'desc')->get();  */  
        return view('profesiones.index',compact('profesiones'));
    }
}
