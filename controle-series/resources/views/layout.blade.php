<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Séries</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c1e0209272.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
        <a class="navbar navbar-expand-lg" href="{{ route('listar_series') }}">Home</a>
        @auth
            <div>
                <span class="mr-5"> <i style="color: blue" class="fas fa-user"></i> <b> {{ auth()->user()->name }} </b> </span>
                <a href="/sair" class="text-danger"> <i class="fas fa-sign-out-alt"></i> Sair</a>
            </div>
        @endauth

        @guest
            <div>
                <a href="{{ route('listar_series') }}"> <i class="fas fa-user"></i> Convidado</a>
                <b>/</b>
                <a href="{{ route('entrar') }}"> <i class="fas fa-sign-in-alt"></i> Realizar Login</a>
            </div>
        @endguest
            
        

        
        
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>
        @yield('conteudo')
    </div>
</body>
</html>