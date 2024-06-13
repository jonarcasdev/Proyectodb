<?php
 
namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\mensajero;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = Servicio::all();
        $datos['servicio']=servicio::paginate(5);
        return view('servicios.IndexServicios', $datos, compact('servicios' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $servicio = new servicio();
        $usuario = usuario::all();
        return view('servicios.createServicios', $usuario ,compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosservicio = request()->except('_token');
        servicio::insert($datosservicio);
        return redirect('/servicio/')->with('mensaje','Servicio agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(servicio $servicio)
    {
        //
        $usuario = usuario::all();
        $mensajero = mensajero::all();
        return view('servicios.showServicios', compact('servicio', 'usuario','mensajeros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicio $servicio, $id)
    {
        //
        $servicio=servicio::FindOrFail($id);
        $usuario = usuario::all();
        $mensajero = mensajero::all();
        return view('servicios.editServicios', compact('servicio', 'usuario','mensajeros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servicio $servicio,$id)
    {
        //
        $datosservicio = request()->except(['_token','_method']);
        servicio::where('id','=', $id)->update($datosservicio);

        $datosservicio=servicio::FindOrFail($id);
        return redirect('servicio')->with('mensaje','Servicio Actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        servicio::FindOrFail($id);
        servicio::destroy($id);

        return redirect('usuario')->with('mensaje','Servicio borrado correctamente');
    }
}
