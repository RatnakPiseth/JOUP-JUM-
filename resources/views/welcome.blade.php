<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JOUP JUM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- bootstrab-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
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
                top: 25px;
               
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 18px;
                font-size: 18px;
                font-weight: 100px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .main-nav{
                background-color: black;
                color: white;
                height: 80px;
                
            }
            .navbar-container{
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                float: left;
            }
            .navbar-container a{text-decoration: none;}
            
            .logo{
                text-decoration: none;
                text-decoration-color: black;
                background-image: url('../image/logo.png')
            }
        </style>
    </head>
    <body>
        <div class="main-nav navbar navbar-inverse navbar-fixed-top flex-center position-ref full-height">
                <div class="navbar-container">
                    <a href="#">LOGO</a>
                </div>
 
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Forum</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                        @endif
                        
                    @endauth
                    
                </div>
            @endif

           
        </div>
        <!--Jumbo Tron -->
    </body>
</html>
