<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.svg" type="image/svg">

    <link rel="stylesheet" href="css/template.css">
    <title>@yield('title') | Adapti</title>
</head>
<body>
    <header>  
    <form action="{{ route('movie.index') }}" method="GET">
        <a href="{{ route('movie.index') }}">
            <img src="images/logo.svg" alt="Logo" width="180" height="60" class="logo">
            <span class="start">INICIO</span>
        </a>
        <input type="text" id="search" name="search" placeholder="PESQUISAR" class="navbar">
        <button class="nav-button"><img src="images/search.svg" alt="PESQUISAR" width="24" height="24"></button>
    </form>
    <a href="{{ route('movie.create') }}"><button class="create-button">ADICIONAR FILME</button></a>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <img src="images/logo-bottom.svg" alt="Logo" width="144" height="48"> 
        <p class="footer-message"> @ 2021, Adapti Filmes </p>
    </footer>

</body>
</html>