<!DOCTYPE html>
<html>
<head>
  <title>Mixed Website</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="{{ url('/') }}" class="pull-left logo"><img src="{{ asset('img/logo.jpg') }}" height="71"></a>
        <a class="navbar-brand" href="{{ url('/') }}">Projectplatform</a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">

        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
          <!-- <li></li> -->
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li>
            <a href="{{ url('/login') }}" role="button" aria-haspopup="true" aria-expanded="false">Inloggen</a>
          </li>
          <li><a href="{{ url('/register') }}">Registreren </a></li>
          @else
          <li><p>Ingelogd als </p></li>
          <li><a href="#">Afmelden</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
