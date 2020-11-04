<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OSE Gestor de convenios</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{asset('//fonts.gstatic.com')}}">
    <link href="{{asset ('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
    <link rel="Shortcut Icon" type="image/x-icon" href="{{asset('assets/icons/Icono_Tec.ico')}}" />
    <script src="{{asset('js/sweet-alert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/sweet-alert.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px;  cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
              Administracion de Convenios
            </div>
            <div class="full-reset" style=" padding: 10px 0; color:#fff;">
                <figure>
                   <img src="{{asset('assets/img/logo.png')}}" alt="Biblioteca" class="img-responsive center-box" style="width:55%;border-radius: 20px;">
                </figure>
                <p class="text-center" style="padding-top: 15px; font-size:20px;">Sistema de Registro de Convenios</p>
            </div>
            <div class="full-reset nav-lateral-list-menu" style="color:#fff;">
                <ul class="list-unstyled">
                    <li><a href="{{route('Home.index')}}"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp;<span>Inicio</span> </a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp;<span> Administración de Convenios</span> <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{route('RegistroConvenio.index')}}"><i class="zmdi zmdi-file-plus"></i>&nbsp;&nbsp;<span> Registrar Convenios</span></a></li>

                            <li><a href="{{route('ListaConvenio.index')}}"><i class="zmdi zmdi-view-list-alt"></i>&nbsp;&nbsp;<span>Mostrar Convenios</span></a></li>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts"></i>&nbsp;&nbsp;<span> Control de usuarios</span> <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{route('RegistroAdministrador.index')}}"><i class="zmdi zmdi-accounts-add"></i>&nbsp;&nbsp;<span> Nuevo administrador</span></a></li>
                            <li><a href="{{route('ListaAdministradores.index')}}"><i class="zmdi zmdi-accounts-list-alt"></i>&nbsp;&nbsp;<span> Lista de administradores</span></a></li>
                        </ul>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="{{asset('assets/img/user01.png')}}" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">{{Auth::user()->name}}</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            <i class="zmdi zmdi-power"></i>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                </li>
                
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="font-size: 30px;">Sistema de Registro de Convenios <small style="font-size: 18px;">Inicio</small></h1>
            </div>
        </div>
        
        @yield('menu')