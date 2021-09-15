<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/icon.svg" type="image/svg">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">

    <title>@yield('title') | Adapti</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header-container"> 
        <div class="header-align">
            <a href="{{ route('movie.index') }}"><img src="{{ asset('images/logo.svg') }}" alt="Logo"class="logo"></a>
            <input type="checkbox" name="checkbox" id="nav-checkbox" class="nav-checkbox">
            <label for="nav-checkbox" class="nav-toggle">
                <img src="{{ asset('images/menu.svg') }}" alt="menu icon" class="menu">
                <img src="{{ asset('images/close.svg') }}" alt="close icon" class="close">
            </label>
            <a href="{{ route('movie.index') }}" class="start mobile-display">INICIO</a>
            <a href="{{ route('movie.create') }}" class="create-container mobile-display"><button class="create-button">ADICIONAR FILME</button></a>
        
            <nav class="nav-container mobile-display">
                @yield('navbar')
            </nav>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer-container">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="footer-logo">
        <img src="{{ asset('images/facebook.svg') }}" alt="facebook icon" class="footer-icon">
        <img src="{{ asset('images/instagram.svg') }}" alt="instagram icon" class="footer-icon">
        <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin icon" class="footer-icon">
        <p class="footer-message">
            Desenvolvido com ❤ 2021 Adapti-Soluções Web
        </p>
    </footer>

</body>
</html>