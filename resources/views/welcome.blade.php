<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("{{url('/image/freeman-zhou-oV9hp8wXkPE-unsplash-3.jpg')}}");
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
                color: black;
                padding: 0 25px;
                font-size: 20px;
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
    <body style="overflow: hidden">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }} style=" font-family: 'Cairo', sans-serif !important" " >Home</a>
                    @else
                    <a href="{{ route('login') }}" style=" font-family: 'Cairo', sans-serif !important"  >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style=" font-family: 'Cairo', sans-serif !important"  >Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" style="margin-top:50px;">
                <div class="title m-b-md" style="padding-botton:171px">
                    <b style=" font-style: italic; opacity: 78%;color: black;  font-family: 'Cairo', sans-serif !important"  >Tour Packages</b>
                </div>

                <div class="links">

                </div>
            </div>
        </div>
    </body>
</html>
