<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body { 
                font-family: Figtree, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh;
                margin: 0;
            }
            .container {
                text-align: center;
            }
            .header {
                margin-bottom: 20px;
                font-size: 24px;
            }
            .button { 
                border: none; 
                padding: 10px 20px; 
                cursor: pointer; 
                margin: 5px;
            }
            .login { background-color: #4CAF50; color: white; }
            .register { background-color: #008CBA; color: white; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">Bienvenido a la página de Isaac</div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="button login">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="button login">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button register">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
