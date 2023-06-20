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
            
            <h2>{{$albums->id}}
                {{$albums->titulo}}
                {{$albums->añolanzamiento}}</h2>
            </h2>
            
          
        </div>
    </body>
</html>