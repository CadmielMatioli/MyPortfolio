<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <title>Portfólio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Favicons -->
    <link href="{{asset('img/myicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
  </head>
  <body>
    <!--==========================Header============================-->
    <header id="header">
      <div class="container-fluid"> 
        <div id="logo" class="pull-left">
          @if(\Auth::check())
            <h1 style="color:aliceblue;"><a href="#intro" class="scrollto"></a>{{Auth()->user()->name}}</h1>
          @else
            <h1 style="color:aliceblue;"><a href="#intro" class="scrollto"></a>Portfólio Online</h1>
          @endif
          </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
          <li class="menu-active"><a href="{{url('/')}}">Inicio</a></li>
          @if(\Auth::check())
            <li><a href="{{route('share', ['id' => auth()->user()->id])}}">Perfil Publico</a></li>
          @endif
            @if(!\Auth::check())
            <li class="menu-has-children"><a href="#">Entrar</a>
              <ul>
                <li>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="box">
                      <div class="row">
                        <div class="form-group">
                          <label for="email" style="color:green;">{{ __('Endereço de E-mail') }}</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12">
                            <label for="password" style="color:green;">{{ __('Senha') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group">
                          <br>
                          <div class="col-sm-12" align="center">
                          <button type="submit" class="btn btn-success">
                              {{ __('Entrar') }}
                          </button>
                        </div>
                        <div class="form-group">
                          @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Esqueceu sua senha?') }}
                              </a>
                          @endif
                        </div>
                        <div class="form-group">
                          <a class="btn btn-link" href="{{ url('/register') }}">
                              {{ __('Registrar-se') }}
                          </a>
                        </div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
              @else
              <li><a href="{{route('user.edit',['id' => auth()->user()->id])}}">Meus dados</a></li>
            </li>
            <li><a href="{{route('logout')}}">Sair</a></li>
            @endif
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->   
    @yield('content')

    <!-- JavaScript Libraries -->

    <script src="{{asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js')}}"></script>
    <!-- Template Main Javascript File -->
    <script src="{{asset('js/main.js')}}"></script>
       <!--==========================Footer============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
            </div>
        </div>
    </footer>
    <!-- #footer -->
    
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> 
    @yield('js')
  </body>
</html>
