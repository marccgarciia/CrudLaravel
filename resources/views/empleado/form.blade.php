<h1> {{ $modo }} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input class="form-control" type="text" name="Nombre" placeholder="Nombre" id="Nombre" value="{{ isset ($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
    <br>
</div>

<div class="form-group">
    <label for="Apellido">Apellido:</label>
    <input class="form-control" type="text" name="Apellido" placeholder="Apellido" id="Apellido" value="{{ isset ($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}">
    <br>
</div>

<div class="form-group">
    <label for="Correo">Correo:</label>
    <input class="form-control" type="text" name="Correo" placeholder="Correo" id="Correo" value="{{ isset ($empleado->Correo)?$empleado->Correo:old('Correo') }}">
    <br>
</div>

<div class="form-group">
    <label for="Foto">Foto:</label>
    @if (isset ($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
    @endif
    <input class="form-control" type="file" name="Foto" placeholder="Foto" id="Foto" value="">
    <br>
</div>



<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{ url('empleado/') }}">Volver</a>