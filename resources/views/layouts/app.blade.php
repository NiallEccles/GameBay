<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GameBay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700i" rel="stylesheet">  
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @yield('navigation')
    </body>
</html>
