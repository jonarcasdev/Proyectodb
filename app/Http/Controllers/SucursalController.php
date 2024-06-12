<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use App\Models\Cliente;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['sucursales']=sucursal::paginate(5);
        return view('sucursales.indexSucursal', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sucursal = new Sucursal();
        $cliente = Cliente::all();
        return view('sucursales.createSucursal', compact('cliente'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosSucursal = request()->except('_token');
        Sucursal::insert($datosSucursal);
        return redirect('/Sucursal/')->with('mensaje','Sucursal agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $Sucursal=Sucursal::FindOrFail($id);
        $cliente = Cliente::all();
        return view('sucursales.editSucursal', compact('Sucursal','cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSucursal = request()->except(['_token','_method']);
        Sucursal::where('id','=', $id)->update($datosSucursal);

        $datosSucursal=Sucursal::FindOrFail($id);
        return redirect('Sucursal')->with('mensaje','Sucursal Actualizada correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Sucursal::FindOrFail($id);
        Sucursal::destroy($id);

        return redirect('Sucursal')->with('mensaje','Sucursal borrada correctamente');
    }
}
