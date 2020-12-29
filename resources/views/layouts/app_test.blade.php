<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('KJA Teddy Alfonso') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('template/assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('template/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('template/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('template/assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="{{ asset('template/assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <style type="text/css">
        h2{
            color: black;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- <a class="navbar-brand" href="index.html">{{ config('app.name', 'Laravel') }}</a>  --}}
                <a class="navbar-brand" href="{{ route('home')}}" style="font-size: 20px; background-color: #FFA573;">KJA Teddy Alfonso</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px; margin-right: 40px;"> 
                @guest
                    <a class="btn btn-primary" title="Edit" href="{{ route('login') }}">
                        <i class="fa fa-sign-in"></i> {{ __('Login') }}
                    </a>
                @else
                    {{ Auth::user()->name }} &nbsp; 
                    <a class="btn btn-success square-btn-adjust" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                
            </div>
            
        </nav>   
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="{{ asset('img/logo.png')}}" class="user-image img-responsive"/>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('home')}}"><i class="fa fa-tachometer fa-3x"></i> Dasboard</a>
                        </li>
                        @if (Auth::user()->status == "admin")
                            <li>
                                <a href="{{ route('karyawan.index')}}"><i class="fa fa-user fa-3x"></i> Data Karyawan</a>
                            </li>
                            <li>
                                <a href="{{ route('proyek.index')}}"><i class="fa fa-briefcase fa-3x"></i> Data Proyek</a>
                            </li>
                            <li>
                                <a href="{{ route('user.index')}}"><i class="fa fa-lock fa-3x"></i> Data Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('history.index')}}"><i class="fa fa-history fa-3x"></i> History Proyek</a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ route('laporan.index')}}"><i class="fa fa-file-text fa-3x"></i> Laporan</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>  

        
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('template/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('template/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('template/assets/js/jquery.metisMenu.js')}}"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('template/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('template/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="{{ asset('template/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{ asset('template/assets/js/morris/morris.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('template/assets/js/custom.js')}}"></script>
</body>
</html>
