<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
    </style>
    </head>
    <body>
        <h1>Lista de Albums</h1>
        <hr>
        <div class="contenido">
            @foreach($albums as $album)
            <h2>{{$album->id}}
                {{$album->titulo}}
                {{$album->añolanzamiento}}</h2>
            </h2>
            @endforeach
          
        </div>
    </body>
</html>