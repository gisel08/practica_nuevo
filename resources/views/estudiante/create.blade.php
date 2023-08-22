@extends('welcome')

@section('titulo', 'Crear Estudiantes')

@section('contenido')

<form action="/estudiantes" method="post">
    @csrf
    <div>
        <label for="" class="form-label">Codigo</label>
        <!--form control para darle estilo -->
        <input type="text" name="codigo" id="codigo" class="form-control">
        @error('codigo')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        @error('nombre')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Apellido Paterno</label>
        <input type="text" name="apellidopaterno" id="apellidopaterno" class="form-control">
        @error('apellidopaterno')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Apellido Materno</label>
        <input type="text" name="apellidomaterno" id="apellidomaterno" class="form-control">
        @error('apellidomaterno')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>

    <div>
        <label for="" class="form-label"> NSS</label>
        <input type="text" name="nss" id="nss" class="form-control">
        @error('nss')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>

    <div>
        <label for="" class="form-label">Correo</label>
        <input type="email" name="correo" id="correo" class="form-control">
        @error('correo')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>
    <a href="/estudiantes" class="btn btn-danger text-light">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>


@endsection