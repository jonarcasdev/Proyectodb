<?php

namespace App\Http\Controllers;

use App\Models\mensajero;
use Illuminate\Http\Request;

class MensajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['mensajeros']=mensajero::paginate(5);
        return view('mensajeros.indexMensajeros', $datos); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mensajeros.createMensajero');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosMensajero = request()->except('_token');
        mensajero::insert($datosMensajero);
        return redirect('/mensajero/')->with('mensaje','Mensajero agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(mensajero $mensajero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $mensajero=mensajero::FindOrFail($id);
        return view('mensajeros.editMensajeros', compact('mensajero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosMensajero = request()->except(['_token','_method']);
        mensajero::where('id','=', $id)->update($datosMensajero);

        $mensajero=mensajero::FindOrFail($id);
        return redirect('mensajero')->with('mensaje','Mensajero Actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        mensajero::FindOrFail($id);
        mensajero::destroy($id);

        return redirect('mensajero')->with('mensaje','Mensajero borrado correctamente');
    }
}
