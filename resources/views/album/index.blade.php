<x-app-layout>
</x-app-layout>
 @extends('layouts.plantillabase');

 @section('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
 @endsection

 @section('contenido')
 <h1 class="bg-primary text-white text-center">Album</h1>
 
 <a href="album/create" class="btn btn-success mb-3">Agregar Album</a>

 <table class="table table-dark table-striped mt-4" id="tabla">
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
                <a class="btn btn-info" href="/imprimirAlbums/{{$album->id}}">Imprimir PDF</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
 </table>

 @endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $('#tabla').DataTable({
        responsive: true,
        autoWidth: false
    });
    </script>
 @endsection
