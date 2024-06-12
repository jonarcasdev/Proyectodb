@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/Sucursal') }}" method="post" enctype="multipart/form-data">
@csrf
@include('sucursales.formSucursal',['modo'=>'Crear'])
</form>
</div>
@endsection 