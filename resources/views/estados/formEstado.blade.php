<center><h1>{{$modo}} Estado</h1><br></center>


<div class="form-group">
<center><a href="{{url('/estado/')}}" class="btn btn-primary">INICIO</a><br></center>
<br>
<select class="form-select" name="cliente_id" id="cliente_id">
    <option value="">Seleccione un cliente</option>
    @foreach ($cliente as $cliente)
        <option value="{{ $cliente->id }}" {{ isset($estado->cliente_id) && $sucursal->cliente_id == $cliente->id ? 'selected' : '' }}>
            {{ $cliente->nombre }}
        </option>
    @endforeach 
</select>
<br>

<select class="form-select" name="usuario_id" id="usuario_id">
    <option value="">Seleccione un usuario</option>
    @foreach ($usuario as $usuario)
        <option value="{{ $usuario->id }}" {{ isset($estado->usuario_id) && $estado->usuario_id == $usuario->id ? 'selected' : '' }}>
            {{ $usuario->login }}
        </option>
    @endforeach 
</select>
<br>

<select class="form-select" name="mensajero_id" id="mensajero_id">
    <option value="">Seleccione un mensajero</option>
    @foreach ($mensajero as $mensajero)
        <option value="{{ $mensajero->id }}" {{ isset($mensajero->mensajero_id) && $mensajero->mensajero_id == $mensajero->id ? 'selected' : '' }}>
            {{ $mensajero->nombre }}
        </option>
    @endforeach 
</select>

<br>

<select class="form-select" name="servicio_id" id="servicio_id">
    <option value="">Seleccione un estado</option>
    @foreach ($servicio as $servicio)
        <option value="{{ $servicio->id }}" {{ isset($servicio->servicio_id) && $servicio->servicio_id == $servicio->id ? 'selected' : '' }}>
            {{ $servicio->estado_paquete }}
        </option>
    @endforeach 
</select>

<br>

<label for="foto">Sube la foto del pedido</label>

@if(isset($clientes->foto))
<img src="{{ asset('storage').'/'.$clientes->foto }}" alt="" width="100px">
@endif
<input type="file" name="foto" id="foto">
<br>
<center><input type="submit" value="{{$modo}} Estado" class="btn btn-success"></center>
</div>