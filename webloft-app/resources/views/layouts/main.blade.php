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
                         <a class="nav-link active" aria-current="page" href="/imoveis">Quero Alugar</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/imoveis/cadastrar">Quero Anunciar</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/contatos">Contatos</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Entrar</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cadastrar</a>
                     </li>
                </ul>

                <form class="d-flex">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

            </div>
        </nav>    
      </header>
        @yield('content')
        <footer>
            <p>Web Loft &copy; 2021</p>
        </footer>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
