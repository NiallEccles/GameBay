<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700i|Roboto:400" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #eeeeee;                
                color: #1b1b1b;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-family: 'Roboto Condensed', sans-serif;
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .nav {
                background: #333;
                min-height: 75px;
                position: relative;
                display: flex;
                align-items: center;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 999; }
                .nav a {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 75px;
                    padding: 0px 10px 0px 10px; }
                    @media screen and (max-width: 800px) {
                    .nav a {
                        justify-content: flex-start; } }
                    .nav a .logo {
                    color: #fff;
                    text-decoration: none; }
                .nav a {
                    color: #fff;
                    text-decoration: none; }
                .nav a:hover {
                    background: #fff;
                    color: #333;
                    cursor: pointer; }
                    .nav a:hover .logo {
                    color: #333; }
                .nav .spacer {
                    flex-grow: 1; }
                .nav .responsive-nav span {
                    color:white;}
                    @media screen and (max-width: 800px) {
                    .nav .responsive-nav {
                        color: white;
                        display: block;
                        width: 30px;
                        margin-right: 10px; } }
                .nav ul {
                    display: flex;
                    margin: 0; }
                    @media screen and (max-width: 800px) {
                    .nav ul {
                        display: none; } }
                    .nav ul li {
                    display: flex;
                    margin-bottom: 0 !important; }
                    @media screen and (max-width: 800px) {
                        .nav ul li a {
                        width: 100%; } }
                @media screen and (max-width: 800px) {
                    .nav .respond {
                    display: initial;
                    position: absolute;
                    background: #333;
                    top: 75px;
                    width: 100%;
                    transition: all 300ms ease-in-out;
                    padding: 0; } }
        </style>
    </head>
    <body>
        @yield('navigation')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">                
                <div class="title m-b-md">
                    GameBay
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
