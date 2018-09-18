<!DOCTYPE html> <html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>EncuestasPy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cantora+One" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('user/css/mdb.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/css/radio.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('user/css/style.min.css')}}" rel="stylesheet">
  <style type="text/css">
    html,
    body{
      font-family: 'Cantora One', sans-serif;
      },
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="{{url('/')}}">
        <strong class="white-text"><i class="fa fa-home" aria-hidden="true"></i> EncuestasPy</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">

            <a class="white-text nav-link waves-effect" href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i>Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="white-text nav-link waves-effect" href=""><i class="fa fa-users"></i>Nosotros</a>
          </li>
          @if(!empty(Auth::user()->nivel) > 0)
          <li class="nav-item">
            <a class="white-text nav-link waves-effect" href="{{url('administracion')}}"><i class="fa fa-tachometer" aria-hidden="true"></i>Administracion</a>
          </li>
          @else
          @endif
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          @guest
          <li class="nav-item">
            <a href="{{route('login')}}" class="white-text nav-link waves-effect">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              Ingresar
            </a>
          </li>
          @else
          <li class="nav-item">
            <a href="#" class="white-text nav-link waves-effect">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              {{Auth::user()->name}}
            </a>
          </li>
          @endguest
          <li class="nav-item">
            <a href="#" class="white-text nav-link waves-effect" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="white-text nav-link waves-effect" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="white-text nav-link waves-effect" target="_blank">
              <i class="fa fa-github mr-2"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main>
    <div class="container">

      <div style="padding: 50px;"></div>

      <!--Section: Products v.3-->
      @yield('content')
      
      <!--Section: Products v.3-->

    </div>
  </main>
  <!--Main layout-->
  <!--Footer-->
  <footer id="footer" class="page-footer text-center font-small mt-4 wow fadeIn unique-color-dark ">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="" target="_blank">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-google-plus mr-3"></i>
      </a>
      
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="http://techcirclepy.com" target="_blank"> TechCircle.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('user/js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('user/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('user/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('user/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>