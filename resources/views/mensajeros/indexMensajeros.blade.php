
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
<h1>Mensajeros</h1>
<a href="{{url('/mensajero/create')}}" class="btn btn-success">CREATE</a> <br><br>
</center>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Nombre</th>
            <th>Identificacion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $mensajeros as $mensajero )
        <tr>
            <td>{{$mensajero->id}}</td>

            <td>{{$mensajero->direccion}}</td>
            <td>{{$mensajero->email}}</td>
            <td>{{$mensajero->telefono}}</td>
            <td>{{$mensajero->nombre}}</td>
            <td>{{$mensajero->identificacion}}</td>
            <td> <a href="{{'/mensajero/'.$mensajero->id.'/edit'}}" class="btn btn-primary">EDITAR</a> 
                <br><br>
                <form action="{{ url('/mensajero/'.$mensajero->id)}}" method="post" >
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