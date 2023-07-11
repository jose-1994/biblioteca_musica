<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: rgb(90,255,245);
    background: radial-gradient(circle, rgba(90,255,245,1) 0%, rgba(69,200,218,1) 49%, rgba(0,151,255,1) 100%);}
header {
    background-color: #55a0d9;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    
}

/* Estilos para las secciones */
section {
  background-color: transparent;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  margin-top:20px;
}

section h2 {
    color: #000;
}

/* Estilos para el formulario de contacto */
.contact form input,
.contact form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

.contact form button {
    padding: 10px 20px;
    background-color: #55a0d9;
    color: #fff;
    border: none;
    cursor: pointer;
}

/* Estilos para el pie de página */
footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}
    </Style>
</head>
<body>

    <header>
        <nav>
        <ul>    
    <li><a href="{{url('/')}}">Inicio</a></li>
    <li><a href="{{url('/viewartistas')}}">Artistas</a></li>
    <li><a href="{{url('/viewalbums')}}">Albums</a></li>

           @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            @else
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                @endif
            @endauth
        @endif</ul>
        </nav>
    </header>
            {{ $slot }}
    
            <footer>
        <!-- Contenido del pie de página -->
        <p>Derechos de autor &copy; 2023. Todos los derechos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>