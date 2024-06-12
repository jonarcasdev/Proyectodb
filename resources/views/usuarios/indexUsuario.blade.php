
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
<h1>Usuarios</h1>
<a href="{{url('/usuario/create')}}" class="btn btn-success">CREATE</a> <br><br>
</center>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>Usuario</th>
            <th>Cliente</th>
            <th>Login</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $usuarios as $usuario )
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->cliente->nombre ?? 'Cliente no encontrado' }}</td>
            <td>{{$usuario->login}}</td>
 

            <td>
                <a href="{{'/usuario/'.$usuario->id}}" class="btn btn-warning ">SHOW</a> 
                <a href="{{'/usuario/'.$usuario->id.'/edit'}}" class="btn btn-primary ">EDITAR</a> 
                <form action="{{ url('/usuario/'.$usuario->id)}}" method="post" >
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="BORRAR" class="btn btn-danger ">
                </form>
            </td>
        </tr>

        
        @endforeach
    </tbody>
</table>
</div>
@endsection