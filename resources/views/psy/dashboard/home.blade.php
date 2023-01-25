<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>AMANE</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/css/dashboard.css">
        <link rel="icon" type="image/x-icon" href="/images/logo.png">
    </head>
    <body>
    @if(!Auth::User()->is_valid)
    <h3><center>your account not valide</center></h3>
    @else
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>{{ Auth::User()->name}}</h3>
                </div>
                <ul class="list-unstyled components">
                    <p>Dummy Heading</p>
                    <li class="active">
                        <a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">My Session</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Old</a></li>
                            <li><a href="{{ route('my.new.sessions') }}">New</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('MyPartiens') }}">My Partiens</a>
                    </li>
                    <li>
                        <a href="#">Chat Room</a>
                    </li>
                    <li>
                        <a href="#">Help Center</a>
                    </li>
                </ul>
                <ul class="list-unstyled CTAs">
                    <li><a href="#" class="download">Setting</a></li>
                    <li><a href="{{ route('logout') }}" class="article">Logout</a></li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
    
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">{{ Auth::User()->name}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('dashboard_content')
            </div>
        </div>
        @endif
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
