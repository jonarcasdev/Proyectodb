
@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="buttom" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"></span>
</button>
</div>
@endif

<center>
<h1>Sucursales</h1>
<a href="{{url('/Sucursal/create')}}" class="btn btn-success">CREATE</a> <br><br>
</center>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $sucursales as $sucursal )
        <tr>
            <td>{{$sucursal->id}}</td>
            <td>{{$sucursal->cliente->nombre ?? 'Cliente no encontrado' }}</td>
            <td>{{$sucursal->direccion}}</td>
            <td>{{$sucursal->telefono}}</td>
            <td>{{$sucursal->nombre}}</td>
            <td> <a href="{{'/Sucursal/'.$sucursal->id.'/edit'}}" class="btn btn-primary">EDITAR</a> 
                <br><br>
                <form action="{{ url('/Sucursal/'.$sucursal->id)}}" method="post" >
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