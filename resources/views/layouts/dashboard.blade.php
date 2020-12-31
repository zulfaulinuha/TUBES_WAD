<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>{{ __('KJA Teddy Alfonso') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }

        body {
            background: url(img/Background.PNG) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body class="antialiased">



    <nav class="navbar navbar-expand-lg navbar-light bg-transparent justify-right">
        <a class="navbar-brand text-white text font-weight-bold" href="#"><img src="{{ asset('img/Logo.PNG') }}"
                alt="" width="50px">&nbsp;&nbsp;KJA Teddy Alfonso</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="welcome" class="nav-link text-white-50">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="report">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="contactus">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white-50">Login</a>
                    </li>
                    @if (Route::has('register'))
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-white-50">Register</a>
                    </li>
                </ul>
            @endif --}}
        </div>
    </nav>
@yield('content')
</body>

</html>
