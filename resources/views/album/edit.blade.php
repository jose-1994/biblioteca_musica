@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR REGISTROS DE ALUBM</h2>

<form action="/album/{{$album->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="" class="form-label">Titulo</label>
        <input type="text" value="{{$album->titulo}}" id="titulo" name="titulo" class="form-control" tabindex="1">
    </div>
    <div>
        <label for="" class="form-label">Año de Lanzamiento</label>
        <input type="number" value="{{$album->añolanzamiento}}" id="añolanzamiento" name="añolanzamiento" class="form-control" tabindex="2">
    </div>
    <div>
        <label for="" class="form-label">ID Artista</label>
        <input type="number" value="{{$album->idartista}}" id="idartista" name="idartista" class="form-control" tabindex="3">
    </div>
    <br>
    <a href="/album" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection 