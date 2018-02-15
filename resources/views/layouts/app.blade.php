<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="menu">
            <button>
                <span class="icon-hamburger"></span><span class="label">menu</span>
            </button>
            <div class="menu__container">
                <button class="close-icon">
                    <span class="icon-chiudi"></span>
                </button>
                <nav>
                    <ul>
                        <li><a href="#">Progetti</a></li>
                        <li><a href="#">Chi sono</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contatti</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
            <span class="icon-logo logo"></span>
        </div>
    </header>
    
    <div class="left-text">
        Branding / Graphic design
    </div>

    <div class="right-text">
        Illustrazione / Packaging
    </div>

    <div id="app">
        @yield('content')
    </div>

    <footer>
        
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
