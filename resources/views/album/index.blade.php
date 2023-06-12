 @extends('layouts.plantillabase');

 @section('contenido')
 <a href="album/create" class="btn btn-primary">Agregar Album</a>
 <table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Año de Lanzamiento</th>
            <th scope="col">ID Artista</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($albums as $album)
        <tr>
            <td>{{$album->id}}</td>
            <td>{{$album->titulo}}</td>
            <td>{{$album->añolanzamiento}}</td>
            <td>{{$album->idartista}}</td>
            <td>
                <form action="{{route ('album.destroy',$album->id)}}" method="POST">
                <a class="btn btn-info" href="/album/{{$album->id}}/edit">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
 </table>
 @endsection
