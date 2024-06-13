<?php

namespace App\Http\Controllers;

use App\Models\estado;
use App\Models\Cliente;
use App\Models\usuario;
use App\Models\mensajero;
use App\Models\servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstadoController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $estados = estado::all();
        $datos['estado']=estado::paginate(5);
        return view('estados.IndexEstados', $datos,compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = estado::all();
        $cliente = Cliente::all();
        $usuario = usuario::all();
        $mensajero = mensajero::all();
        $servicio = servicio::all();
    
        return view('estados.createEstados', compact('cliente', 'usuario', 'mensajero', 'servicio', 'estados'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosEstado = request()->except('_token');

        if($request->hasFile('foto')){
            $datosEstado['foto']=$request->file('foto')->store('upload','public');
        }

        estado::insert($datosEstado);
        //return response()->json($datosCliente);
        return redirect('/estado/')->with('mensaje','Estado agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $estados=estado::FindOrFail($id);
        $cliente = Cliente::all();
        $usuario = usuario::all();
        $mensajero = mensajero::all();
        $servicio = servicio::all();
        return view('estados.editEstados', compact('cliente','usuario','mensajero','servicio','estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, estado $estado, $id)
    {
        //

        $datosEstado = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $estados=estado::FindOrFail($id);
            Storage::delete(['public/'.$estados->foto]);
            $datosEstado['foto']=$request->file('foto')->store('upload','public');
        }

        

        estado::where('id','=', $id)->update($datosEstado);

        $estados=estado::FindOrFail($id);
        return redirect('estado')->with('mensaje','Estado actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(estado $estado,$id)
    {
        //
        $estados=estado::FindOrFail($id);
        if(Storage::delete('public/'.$estados->foto)){
            estado::destroy($id);
        }
        
        return redirect('estado')->with('mensaje','Estado borrado correctamente');
    }
}
