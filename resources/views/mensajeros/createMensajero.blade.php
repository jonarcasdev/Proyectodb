@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/mensajero') }}" method="post" enctype="multipart/form-data">
@csrf
@include('mensajeros.formMensajeros',['modo'=>'Crear'])
</form>
</div>
@endsection 