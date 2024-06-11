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

<a href="{{url('/cliente/create')}}" class="btn btn-success">CREATE</a> <br><br>

<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Identificacion</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $clientes as $cliente )
        <tr>
            <td>{{$cliente->id}}</td>

            <td>
                <img src="{{ asset('storage').'/'.$cliente->foto }}" alt="" width="100px" >

            </td>

            <td>{{$cliente->identificacion}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->ciudad}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->email}}</td>
            <td> <a href="{{'/cliente/'.$cliente->id.'/edit'}}" class="btn btn-primary">EDITAR</a> 
                <br><br>
                <form action="{{ url('/cliente/'.$cliente->id)}}" method="post" >
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