<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@100&display=swap" rel="stylesheet">

        <!-- CSS aplication -->

        <link rel="stylesheet" href="/css/style.css">

        <!-- CSS Bootsrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Script -->

        <script src="/js/script.js"></script>

    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
        <img src="/img/" alt="">
        </a>
        <ul class="navbar-nav">
             <li class="nav-item">
        <a href="/animais/create" class="nav-link">Cadastrar Bovino</a>
            </li>
            <li class="nav-item">
             <a href="/" class="nav-link">Visualizar Bovinos</a>
            </li>
            <li class="nav-item">
             <a href="/" class="nav-link">Gerenciar Bovinos</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">Cadastrar</a>
            </li>

         </ul>
    </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
              @if (session('msg'))
                  <p class="msg">{{ session('msg') }}</p>
              @endif
              @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>Pedro Test &copy; 2023</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
