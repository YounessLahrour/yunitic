<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href={{asset("./css/main.css")}}>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
    <div class="wrapper">
        @guest

        @else
        <div class="content-menu">
            <li><span class="icon8"></span><h4 class="text8"></h4><img src="./img/empleados/youness.jpg" width="50px" height="50px" class="rounded-circle"></li>
            <a href="{{route('home')}}"><li><span class="lnr lnr-home icon1"></span><h4 class="text1">Inicio</h4></li></a>
            <a href="{{route('empleados.index')}}"><li><span class="lnr lnr-users icon2"></span><h4 class="text2">Empleados</h4></li></a>
            <a href="{{route('clientes.index')}}"><li><span class="lnr lnr-user icon8"></span><h4 class="text8">Cliente</h4></li></a>     
            <a href="{{route('ordenes.index')}}"><li><span class="lnr lnr-file-empty icon3"></span><h4 class="text3">Ordenes</h4></li></a>
            <li><span class="lnr lnr-envelope icon4"></span><h4 class="text4">Notificación</h4></li>
            <li><span class="lnr lnr-bubble icon5"></span><h4 class="text5">Chat</h4></li>
            <li><span class="lnr lnr-cog icon6"></span><h4 class="text6">Configuración</h4></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
            </form>
            <a  href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><li><span class="lnr lnr-exit icon7"></span><h4 class="text7">Salir</h4></li></a>
        </div>
        
        <span class="lnr lnr-menu background:red"></span>
        <div class="main_content">
            <div class="header ">
              
              <div class="box ">{{ Auth::user()->name }} <img src="../img/empleados/youness.jpg" width="50px" height="50px" class="rounded-circle"></div>
              <div class="box first">Lahrour S.L</div>
              </div>  
              <div class="info">

              @yield('contenido')
          </div>
              @endguest
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src={{asset("./js/main.js")}}></script>
</body>
</html>
