<center><h1>{{$modo}} Sucursal</h1><br></center>


<div class="form-group">
<center><a href="{{url('/Sucursal/')}}" class="btn btn-primary">INICIO</a><br></center>

<label for="cliente_id">Cliente</label>
<select class="form-select" name="cliente_id" id="cliente_id">
    <option value="">Seleccione un cliente</option>
    @foreach ($cliente as $cliente)
        <option value="{{ $cliente->id }}" {{ isset($sucursal->cliente_id) && $sucursal->cliente_id == $cliente->id ? 'selected' : '' }}>
            {{ $cliente->nombre }}
        </option>
    @endforeach
</select>

<label for="nombre">Nombre</label>

<input class="form-control" type="text" name="nombre" id="nombre" value="{{ isset($Sucursal->nombre)?$Sucursal->nombre:'' }}">

<label for="direccion">Direccion</label>

<input class="form-control" type="text" name="direccion" id="direccion" value="{{ isset($Sucursal->direccion)?$Sucursal->direccion:''}}">

<label for="telefono">Telefono</label>

<input class="form-control" type="text" name="telefono" id="telefono" value="{{ isset($Sucursal->telefono)?$Sucursal->telefono:''}}">

<br>
<center><input type="submit" value="{{$modo}} datos" class="btn btn-success"></center>
</div>