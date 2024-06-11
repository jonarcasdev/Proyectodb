@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/cliente/'.$clientes->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('patch')}}

@include('clientes.FormClientes', ['modo'=>'Editar'])
</form>
</div>
@endsection
 