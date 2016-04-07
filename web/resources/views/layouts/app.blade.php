<!DOCTYPE html>
<html>
    <head>
        <title>Mixed Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Projectplatform</a>
          </div>
            
            <div id="navbar" class="navbar-collapse collapse">
                
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inloggen<span class="caret"> </span></a>
                          <ul class="dropdown-menu">
                            <form method="POST" action="{{ url('/login') }}">
                                <li>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Uw emailadres">
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Uw passwoord">
                                    </div>
                                </li>
                                <li>
                                   <button type="submit" class="btn btn-primary" value="Inloggen">  
                                </li>
                            </form>

                          </ul>
                        </li>
                        <li><a href="{{ url('/register') }}">Registreren ></a></li>
                    @else
                        <li><p>Ingelogd als </p></li>
                        <li><a href="#">Afmelden ></a></li>
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
