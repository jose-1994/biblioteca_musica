<x-layout>
@extends('layouts.plantillabase');

@section('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
 @endsection

@section('contenido')
<h1 class="bg-primary text-white text-center">Artistas</h1>
 <a href="artistas/create" class="btn btn-success mb-3">Agregar Artista</a>
 <table class="table table-dark table-striped mt-4" id="tabla">
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