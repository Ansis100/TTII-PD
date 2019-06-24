<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
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
            <!--NavBar v Registration & LogIn-->
            <div id="PageTop" class="header">
              <a href="#default" class="logo">FindApartment corporation</a>
              <div class="header-right">
                <a class="active" href="#home">Home</a>
                <a href="register">Register</a>
                <a href="login">Log In</a>
              </div>
            </div>
            <div class = "top_button">
			        <button class="to_top_btn"><a href="#PageTop">To Top</a></button>
		        </div>
            <!--Table for everything else-->
            <div id="Table">
              <table class="MainPageTable">
                <tr>
                  <td>
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
                  </td>
                </tr>
              </table>
            </div>

        </div>
    </body>
</html>
