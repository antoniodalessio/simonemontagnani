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
            <span class="icon-hamburger"></span>
            <span class="label">menu</span>
        </button>
        <div class="menu__container">
            <button class="close-icon">
                <span class="icon-chiudi"></span>
            </button>
            <nav>
                <ul>
                    <li><a href="{{URL::to('/portfolio')}}">Progetti</a>
                      <ul class="submenu">
                        <li><a href="">Lavori</a></li>
                        <li><a href="">Personali</a></li>
                      </ul>
                    </li>
                    <li><a href="{{URL::to('/about-us')}}">Chi sono</a></li>
                    <li><a href="{{URL::to('/contatti')}}">Contatti</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div>
        <a href="{{URL::to('/')}}">
          <span class="icon-logo logo"></span>
        </a>
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
