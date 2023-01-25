<!DOCTYPE html>

<html>

<head>

    <title>AMANE</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <link rel="stylesheet" href="/css/uLogin.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/main.js"></script>
</head>

<body style="background-color: #f3fdf3;text-dicoretion=none">
    {{-- <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/images/logo.pnp"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('psychologe.matching.step.one') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="flex justify-between align-center p-1 px-2 nav-scrolled">
        <div class="avatar-container">
          <img src="/images/Logo.png" alt="amane logo"/>
        </div>
      @guest
        <div class="flex align-center mb-flex-rev">
          <i class="uil uil-apps hidden" id="menu"></i>
          <ul class="navigation p-1">
            <a href="#" style="text-decorition:none">
              <li class="p-1 mx-2">
                <div class="hidden"><i class="icon uil uil-estate" ></i></div>
                Accueil
              </li>
            </a>
            <a href="#">
              <li class="p-1 mx-2">
                <div class="hidden">
                  <i class="icon uil uil-info-circle"></i>
                </div>
                A propos
              </li></a
            >

            <a href="#"
              ><li class="p-1 mx-2">
                <div class="hidden">
                  <i class="icon uil uil-comment-question"></i>
                </div>
                FAQ
              </li></a
            >

            <a href="#"
              ><li class="p-1 mx-2">
                <div class="hidden">
                  <i class="icon uil uil-comment-alt-heart"></i>
                </div>
                Testimonial
              </li></a
            >

            <a href="#"
              ><li class="p-1 mx-2">
                <div class="hidden"><i class="icon uil uil-medkit"></i></div>
                Praticien
              </li></a
            >

            <a href="#"
              ><li class="p-1 mx-2">
                <div class="hidden">
                  <i class="icon uil uil-headphones"></i>
                </div>
                Support
              </li></a
            >
          </ul>
          <a href="{{ route('psychologe.matching.step.one') }}"class="main-btn">commacer</a>
        </div>
        @else
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name  }}
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </div>
        @endguest
      </nav>
    @yield('content')
</body>

  

</html>