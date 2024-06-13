<center><h1>{{$modo}} Servicio</h1><br></center>


<div class="form-group">
<center><a href="{{url('/usuario/')}}" class="btn btn-primary">INICIO</a><br></center>

<label for="origen">Origen</label>

<input class="form-control" type="text" name="origen" id="origen" value="{{ isset($servicio->origen)?$servicio->origen:'' }}">

<label for="destino">Destino</label>

<input class="form-control" type="text" name="destino" id="destino" value="{{ isset($servicio->destino)?$servicio->destino:''}}">

<label  for="ciudad">Ciudad</label>

<input class="form-control" type="text" name="ciudad" id="ciudad" value="{{ isset($servicio->ciudad)?$servicio->ciudad:'' }}">

<label for="descripcion">Descripcion</label>

<input class="form-control" type="int" name="descripcion" id="descripcion" value="{{ isset($servicio->descripcion)?$servicio->descripcion:'' }}">

<label for="tipo_transporte">Tipo de Transporte:</label>
                <select class="form-control" id="tipo_transporte" name="tipo_transporte" required>
                    <option value="selecciona">Selecciona</option>
                    <option value="moto">Moto</option>
                    <option value="carro">Carro</option>
                    <option value="camion">Camión</option>
                </select>

<label for="numero_paquete">Numero de paquetes</label>

<input class="form-control" type="int" name="numero_paquete" id="numero_paquete" value="{{ isset($servicio->numero_paquete)?$servicio->numero_paquete:'' }}">


<label for="estado_paquete">Estado del Paquete:</label>
                <select class="form-control" id="estado_paquete" name="estado_paquete" required>
                    <option value="selecciona">Selecciona</option>
                    <option value="solicitado">Solicitado</option>
                </select>

<br>
<center><input type="submit" value="{{$modo}} Servicio" class="btn btn-success"></center>
</div>