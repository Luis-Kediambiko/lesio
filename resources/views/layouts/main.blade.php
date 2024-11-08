<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    
     
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container justify-content-center"> <!-- Adiciona o container e justifica ao centro -->
                    <a href="/" class="navbar-brand" id="navbar">
                        <img src="/img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="/events/create" class="nav-link">Criar eventos</a></li>
                            <li class="nav-item"><a href="/" class="nav-link">Participantes</a></li>
                            <li class="nav-item"><a href="/" class="nav-link">Criar conta</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        @yield('content')



        <footer class="bg-light text-center text-muted py-3 fixed-bottom">
            <p class="mb-0">Lésio Events &copy; 2024. Todos os direitos reservados.</p>
        </footer>
        <script src="/js/script.js"></script>
    </body>
</html>