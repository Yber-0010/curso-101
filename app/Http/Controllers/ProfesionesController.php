<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesiones;
use App\Http\Requests\ProfesionesRequest;

class ProfesionesController extends Controller
{
    public function index()
    {
        $profesiones = Profesiones::all();/* orderBy('id', 'desc')->get();  */  
        return view('profesiones.profesion.index',compact('profesiones'));
    }
    public function create()
    {
        return view('profesiones.profesion.create');
    }
    public function store(ProfesionesRequest $request)
    {
        $profesiones = Profesiones::get();
        $limite = count($profesiones);
        if ($limite == 8) {
            return redirect('/profesiones/profesion');    
        } else {
            $profesiones = new Profesiones();
            $profesiones->nombre = request('nombre');
            $profesiones->save();
            return redirect('/profesiones/profesion');
        }
    }
    public function edit($id)
    {
        $profesiones = Profesiones::findOrFail($id);
        //$profesiones = Profesiones::find($profesiones->id_profesion);
        return view('profesiones.profesion.edit', ['profesiones' => $profesiones]);
    }
    public function update(ProfesionesRequest $request, $id)
    {
        $profesiones = Profesiones::findOrFail($id);
        $profesiones->nombre = request('nombre');
        $profesiones->update();
        return redirect('/profesiones/profesion');
    }
    public function destroy($id)
    {
        $profesiones = Profesiones::findOrFail($id);
        $profesiones->delete();
        return redirect('/profesiones/profesion');
    }
}
