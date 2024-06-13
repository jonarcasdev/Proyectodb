@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/servicio') }}" method="post" enctype="multipart/form-data">
@csrf
@include('servicios.formServicio',['modo'=>'Crear'])
</form>
</div>
@endsection 