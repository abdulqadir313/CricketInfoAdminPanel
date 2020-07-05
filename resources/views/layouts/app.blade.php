<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CricketInfo - @yield('title')</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
            WebFont.load({
                    google: {"families":["Lato:300,400,700,900"]},
                    custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['./css/fonts.min.css']},
                    active: function() {
                            sessionStorage.fonts = true;
                    }
            });
    </script>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!--theme CSS-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/atlantis.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
</head>
<body>
    <div id="app">
    @if (Auth::user())
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                    
                    <a href="{{ route('home')}}" class="logo">
                            <h1 class="text-white mt-2">CricketInfo</h1>
                            <!--<img src="{{ asset('/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">-->
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                    <i class="icon-menu"></i>
                            </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                    <i class="icon-menu"></i>
                            </button>
                    </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                    
                    <div class="container-fluid">
                            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                                    <li class="nav-item dropdown hidden-caret">
                                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                                    <div class="avatar-sm">
                                                            <img src="{{ asset('/img/profile.jpg') }}" alt=".." class="avatar-img rounded-circle">
                                                    </div>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                                    <div class="dropdown-user-scroll scrollbar-outer">
                                                            <li>
                                                                    <div class="user-box">
                                                                            <div class="avatar-lg"><img src="{{ asset('/img/profile.jpg') }}" alt="image profile" class="avatar-img rounded"></div>
                                                                            <div class="u-text">
                                                                                    <h4>@if (Auth::user())  {{ Auth::user()->name }} @endif</h4>
                                                                                    <p class="btn btn-xs btn-secondary btn-sm">Adminstrator</p>
                                                                            </div>
                                                                    </div>
                                                            </li>
                                                            <li>
                                                                    
                                                                    <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                                            onclick="event.preventDefault();
                                                                                          document.getElementById('logout-form').submit();">
                                                                             {{ __('Logout') }}
                                                                         </a>
                                     
                                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                             @csrf
                                                                         </form>
                                                                    
                                                            </li>
                                                    </div>
                                            </ul>
                                    </li>
                            </ul>
                    </div>
            </nav>
            <!-- End Navbar -->
        
    </div>
    @endif
<main class="py-4 login">
@yield('content')
</main>
</div>
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/atlantis.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


<!-- Chart JS -->
<script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<!--<script src="./assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>-->

<!-- jQuery Vector Maps -->
<script src="{{ asset('js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }} "></script>
<!-- Atlantis JS -->
<script src="{{ asset('js/atlantis.min.js') }}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{ asset('js/setting-demo.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>
