<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonte Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
        
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- CSS da API -->
        <link rel="stylesheet" href="/css/style.css">  
        <script src="/js/scripts.js"></script>  
        
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="navbar-brand" href="/">
                    <img src="/img/loft_ico.jpg" alt="Web Loft" width="30" height="24" class="d-inline-block align-top">
                    Web Loft
                </a>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" href="/imoveis/cadastrar">Quero Anunciar</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="/contatos">Contatos</a>
                     </li>
                     @auth
                     <li class="nav-item">
                         <a class="nav-link active" href="/dashboard">Meus Imoveis</a>
                     </li>
                     <li class="nav-item">
                         <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                Sair
                            </a>
                         </form>
                     </li>
                     @endauth
                     @guest
                     <li class="nav-item">
                         <a class="nav-link active" href="/login">Entrar</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="/register">Cadastrar</a>
                     </li>
                     @endguest
                </ul>
            </div>
        </nav>    
      </header>
      <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')    
            </div>
        </div>
      </main>
        <footer>
            <p>Web Loft &copy; 2021</p>
        </footer>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
