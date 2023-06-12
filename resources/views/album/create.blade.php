@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTRO DE ALUBM</h2>

<form action="/album" method="POST">
    @csrf
    <div>
        <label for="" class="form-label">Titulo</label>
        <input type="text" id="titulo" name="titulo" class="form-control" tabindex="1">
    </div>
    <div>
        <label for="" class="form-label">Año de Lanzamiento</label>
        <input type="number" id="añolanzamiento" name="añolanzamiento" class="form-control" tabindex="2">
    </div>
    <div>
        <label for="" class="form-label">ID Artista</label>
        <input type="number" id="idartista" name="idartista" class="form-control" tabindex="3">
    </div>
    <br>
    <a href="/album" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection 