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
<h1>Estado</h1>
<a href="{{url('/estado/create')}}" class="btn btn-success">CREATE</a> <br><br>
</center>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Cliente</th>
            <th>Usuario</th>
            <th>Mensajero</th>
            <th>Estado</th>
            <th>Create</th>
            <th>Update</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $estados as $estado )
        <tr>
            <td>{{$estado->id}}</td>

            <td>
                <img src="{{ asset('storage').'/'.$estado->foto}}" alt="" width="100px" >

            </td>
            <td>{{$estado->cliente->nombre ?? 'Cliente no encontrado' }}</td>
            <td>{{$estado->usuario->login ?? 'Usuario no encontrado' }}</td>
            <td>{{$estado->mensajero->nombre ?? 'Mensajero no encontrado' }}</td>
            <td>{{$estado->servicio->estado_paquete ?? 'Estado no encontrado' }}</td>
            <td>{{$estado->servicio->created_at ?? 'Fecha no encontrada' }}</td>
            <td>{{$estado->updated_at ?? 'Fecha de actualización no encontrada'}}</td>
            <td> <a href="{{'/estado/'.$estado->id.'/edit'}}" class="btn btn-primary">EDITAR</a> 
                <br><br>
                <form action="{{ url('/estado/'.$estado->id)}}" method="post" >
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