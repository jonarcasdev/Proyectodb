@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/mensajero/'.$mensajero->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('patch')}}

@include('mensajeros.formMensajeros', ['modo'=>'Editar'])
</form>
</div>
@endsection