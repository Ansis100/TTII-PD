<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <style>
            * {font-family: 'Roboto', Helvetica, sans-serif; font-size: 20px;}
        </style>
    </head>
    <body>
        <div>
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->
            <div class="content">
                <h1>Dzīvokļi:</h1>
                    @foreach ($apartments as $apartment)
                    <p>Pilsēta: {{$apartment->city}}</p>
                    <p>Stāvs: {{$apartment->floor}}. stāvs</p>
                    <p>Dzīvokļa numurs: {{$apartment->apartment_no}}</p>
                    <p>Apraksts: {{$apartment->description}}</p>
                    <hr>
                    @endforeach
            </div>
        </div>
    </body>
</html>
