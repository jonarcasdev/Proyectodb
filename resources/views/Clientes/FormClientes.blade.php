<center><h1>{{$modo}} Cliente</h1><br></center>


<div class="form-group">
<center><a href="{{url('/cliente/')}}" class="btn btn-primary">INICIO</a><br></center>
<label for="identificacion">Nit o C.c</label>    

<input class="form-control" type="text" name="identificacion" id="identificacion" value="{{ isset($clientes->identificacion)?$clientes->identificacion:'' }}">


<label for="nombre">Nombre</label>

<input class="form-control" type="text" name="nombre" id="nombre" value="{{ isset($clientes->nombre)?$clientes->nombre:'' }}">

<label for="direccion">Direccion</label>

<input class="form-control" type="text" name="direccion" id="direccion" value="{{ isset($clientes->direccion)?$clientes->direccion:''}}">

<label  for="ciudad">Ciudad</label>

<input class="form-control" type="text" name="ciudad" id="ciudad" value="{{ isset($clientes->ciudad)?$clientes->ciudad:'' }}">

<label for="telefono">Telefono</label>

<input class="form-control" type="int" name="telefono" id="telefono" value="{{ isset($clientes->telefono)?$clientes->telefono:'' }}">

<label for="email">Email</label>

<input class="form-control" type="email" name="email" id="email" value="{{ isset($clientes->email)?$clientes->email:'' }}">
<br>
<label for="foto">Sube la foto de tu empresa</label>

@if(isset($clientes->foto))
<img src="{{ asset('storage').'/'.$clientes->foto }}" alt="" width="100px">
@endif
<input type="file" name="foto" id="foto">

<center><input type="submit" value="{{$modo}} datos" class="btn btn-success"></center>
</div>