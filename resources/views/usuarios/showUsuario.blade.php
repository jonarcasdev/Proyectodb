@extends('layouts.app')
@section('content')
<div class="container">

<center>
<h1>Usuario</h1>
<center><a href="{{url('/usuario/')}}" class="btn btn-primary">INICIO</a><br></center><br>
</center>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>Usuario</th>
            <th>Cliente</th>
            <th>Login</th>
            <th>Contraseña</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Telefono</th>
        </tr>
    </thead>


    <tbody>
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{$usuario->cliente->nombre ?? 'Cliente no encontrado' }}</td>
            <td>{{$usuario->login}}</td>
            <td>{{$usuario->contraseña}}</td>
            <td>{{$usuario->direccion}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->telefono}}</td>
        </tr>
    </tbody>
</table>
<center>
<h1>Servicios</h1>
<center>
<div class="d-flex justify-content-center">
<a href="{{url('/servicio/create')}}" class="btn btn-success">crear servicio</a>
<a href="{{url('/servicio/')}}" class="btn btn-primary">Seguimiento</a>
</div>
</div>
@endsection