<?php
 
namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datos['clientes']=Cliente::paginate(5);
        return view('Clientes.IndexClientes', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clientes.CreateClientes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datosCliente = request()->all();
        $datosCliente = request()->except('_token');

        if($request->hasFile('foto')){
            $datosCliente['foto']=$request->file('foto')->store('upload','public');
        }

        Cliente::insert($datosCliente);
        //return response()->json($datosCliente);
        return redirect('/cliente/')->with('mensaje','Cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clientes=Cliente::FindOrFail($id);
        return view('clientes.EditClientes', compact('clientes'));
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $datosCliente = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $clientes=Cliente::FindOrFail($id);
            Storage::delete(['public/'.$clientes->foto]);
            $datosCliente['foto']=$request->file('foto')->store('upload','public');
        }

        

        Cliente::where('id','=', $id)->update($datosCliente);

        $clientes=Cliente::FindOrFail($id);
        return redirect('cliente')->with('mensaje','cliente Actualizado correctamente'); 


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $clientes=Cliente::FindOrFail($id);
        if(Storage::delete('public/'.$clientes->foto)){
            Cliente::destroy($id);
        }
        
        return redirect('cliente')->with('mensaje','Cliente borrado correctamente');
    }
}
