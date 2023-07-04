<x-layout>
@extends('layouts.plantillabase');

@section('contenido')
<h2>Editar Artista</h2>
<form action="/artistas/{{$artista->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
<label for=""class="form-label">Nombre</label>
<input id="nombre" name="nombre" type="text" value="{{$artista->nombre}}" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for=""class="form-label">Pais</label>
<input id="pais" name="pais" value="{{$artista->pais}}" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
<label for=""class="form-label">Genero</label>
<input id="genero" name="genero" value="{{$artista->genero}}" type="text" class="form-control" tabindex="3">
</div>
<a href="/artistas" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
</x-layout>