<center><h1>{{$modo}} Mensajero</h1><br></center>


<div class="form-group">
<center><a href="{{url('/mensajero/')}}" class="btn btn-primary">INICIO</a><br></center>

<label for="direccion">Direccion</label>

<input class="form-control" type="text" name="direccion" id="direccion" value="{{ isset($mensajero->direccion)?$mensajero->direccion:''}}">

<label for="email">Email</label>

<input class="form-control" type="email" name="email" id="email" value="{{ isset($mensajero->email)?$mensajero->email:'' }}">

<label for="telefono">Telefono</label>

<input class="form-control" type="int" name="telefono" id="telefono" value="{{ isset($mensajero->telefono)?$mensajero->telefono:'' }}">

<label for="nombre">Nombre</label>

<input class="form-control" type="text" name="nombre" id="nombre" value="{{ isset($mensajero->nombre)?$mensajero->nombre:'' }}">

<label for="identificacion">Nit o C.c</label>    

<input class="form-control" type="text" name="identificacion" id="identificacion" value="{{ isset($mensajero->identificacion)?$mensajero->identificacion:'' }}">
<br>
<center><input type="submit" value="{{$modo}} datos" class="btn btn-success"></center>
</div>