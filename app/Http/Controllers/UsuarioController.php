<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\Cliente;
use Illuminate\Http\Request;

class UsuarioController extends Controller 
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        //
        $datos['usuarios']=usuario::paginate(5);
        return view('usuarios.indexUsuario', $datos);  //no olvidarme enviar la variable al index para que la reconozca
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $usuario = new usuario();
        $cliente = Cliente::all();
        return view('usuarios.createUsuario', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosusuario = request()->except('_token');
        usuario::insert($datosusuario);
        return redirect('/usuario/')->with('mensaje','usuario agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
        $cliente = Cliente::all();
        return view('usuarios.showUsuario', compact('usuario', 'cliente'));



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $usuario=usuario::FindOrFail($id);
        $cliente = Cliente::all();
        return view('usuarios.editUsuario', compact('usuario','cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosusuario = request()->except(['_token','_method']);
        usuario::where('id','=', $id)->update($datosusuario);

        $datosusuario=usuario::FindOrFail($id);
        return redirect('usuario')->with('mensaje','usuario Actualizada correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        usuario::FindOrFail($id);
        usuario::destroy($id);

        return redirect('usuario')->with('mensaje','usuario borrada correctamente');
    }
}
