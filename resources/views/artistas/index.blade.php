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
     
</tr>

</thead>
<tbody>
@foreach($artistas as $artistas)
<tr>
    <td>{{$artista->Id</td>
        <td>{{$artista->Nombre</td>
            <td>{{$artista->Pais</td>
                <td>{{$artista->Genero</td>
                    <td>
                        <a class="btn btn-info">Editar</a>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
</tr>
@endforeach
</tbody>



 </table>
@endsection
</x-layout>