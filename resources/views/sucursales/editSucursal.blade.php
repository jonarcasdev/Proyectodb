@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/Sucursal/'.$Sucursal->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('patch')}}
@include('sucursales.formSucursal', ['modo'=>'Editar'])
</form>
</div>
@endsection 