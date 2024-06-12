<center><h1>{{$modo}} Usuario</h1><br></center>


<div class="form-group">
<center><a href="{{url('/usuario/')}}" class="btn btn-primary">INICIO</a><br></center>

<label for="cliente_id">Cliente</label>
<select class="form-select" name="cliente_id" id="cliente_id">
    <option value="">Seleccione un cliente</option>
    @foreach ($cliente as $cliente)
        <option value="{{ $cliente->id }}" {{ isset($usuario->cliente_id) && $usuario->cliente_id == $cliente->id ? 'selected' : '' }}>
            {{ $cliente->nombre }}
        </option>
    @endforeach
</select>

<label for="login">Login</label>

<input class="form-control" type="text" name="login" id="login" value="{{ isset($usuario->login)?$usuario->login:'' }}">

<label for="contraseña">Contraseña</label>

<input class="form-control" type="text" name="contraseña" id="contraseña" value="{{ isset($usuario->contraseña)?$usuario->contraseña:''}}">

<label for="direccion">Direccion</label>

<input class="form-control" type="text" name="direccion" id="direccion" value="{{ isset($usuario->direccion)?$usuario->direccion:''}}">

<label for="email">Email</label>

<input class="form-control" type="text" name="email" id="email" value="{{ isset($usuario->email)?$usuario->email:''}}">

<label for="telefono">Telefono</label>

<input class="form-control" type="text" name="telefono" id="telefono" value="{{ isset($usuario->telefono)?$usuario->telefono:''}}">

<br>
<center><input type="submit" value="{{$modo}} datos" class="btn btn-success"></center>
</div>