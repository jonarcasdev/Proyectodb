{{-- estilos bootstrap --}}
@extends('layouts.app')
@section('content')
<div class="container">

{{-- Alerta de creado, borrado o editado --}}
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="buttom" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"></span>
</button>
</div>
@endif
<center>
<h1>Servicios</h1>
</center>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Ciudad</th>
            <th>Descripccion</th>
            <th>tipo_transporte</th>
            <th>numero_paquete</th>
            <th>estado_paquete</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $servicios as $servicio )
        <tr>
            <td>{{$servicio->id}}</td>
            <td>{{$servicio->origen}}</td>
            <td>{{$servicio->destino}}</td>
            <td>{{$servicio->ciudad}}</td>
            <td>{{$servicio->descripcion}}</td>
            <td>{{$servicio->tipo_transporte}}</td>
            <td>{{$servicio->numero_paquete}}</td>
            <td>{{$servicio->estado_paquete}}</td>
            <td>
            <form action="{{ url('/servicio/'.$servicio->id)}}" method="post" >
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="BORRAR" class="btn btn-danger">

                </form>



            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection