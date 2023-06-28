<x-layout>
@extends('layouts.plantillabase');
@section('contenido')
 <a href="artistas/create" class="btn btn-primary">crear</a>
 <table class="table table-dark table-striped mt-4">
<thead>
<tr>
    <th scope="col">Id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Pais</th>
    <th scope="col">Genero</th>
    <th scope="col">Acciónes</th>
     
</tr>

</thead>
<tbody>
@foreach($artistas as $artista)
<tr>
    <td>{{$artista->id}}</td>
        <td>{{$artista->nombre}}</td>
            <td>{{$artista->pais}}</td>
                <td>{{$artista->genero}}</td>

                    <td>
                        <form action="{{route('artistas.destroy',$artista->id)}}", method="POST">
                        <a href="/artistas/{{ $artista->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
</tr>
@endforeach
</tbody>



 </table>
@endsection
</x-layout>