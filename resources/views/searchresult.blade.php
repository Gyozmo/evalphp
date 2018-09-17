<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            
        </style>
    </head>
    <body>
    
    
       
        <div class="flex-center position-ref full-height">
               
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/showuser') }}">User account</a>
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/addproduct') }}">Add product</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Toys 'r urs
                </div>

                <div class="links">
                    <input type="search" name="productbar" id="productbar" value="productname"><br>
                    <input type="search" name="citybar" id="citybar" value="City"><br>
                    <a href="{{ url('/search') }}">search</a>
                </div>
                <div class="map">
                <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.arK7rBx8q5O4b8qkN2uF0wHaEK%26pid%3D15.1&f=1" alt="">
                </div>
            </div>
        </div>
    </body>
</html>
