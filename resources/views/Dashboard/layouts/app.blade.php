<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="pc firefox76 js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tour_Packages</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body style="background-image:  linear-gradient(632deg, #4158d0 -20%, #c850c0 50%, #ffcc70 88%)  ">
    <div id="app" style="height: 1045px;" >
        <nav class="navbar navbar-expand-md" style="background-color:darkslategray">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:darkorange">
                    Tour_Packages
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:darkorange">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        @auth
            <div class="container">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>

                @endif
                <div class="row">
                    <div class="col-md-3 py-4">
                        <ul class="list-group">
                            @if(auth()->user()->IsAdmin())
                            <li class="list-group-item" style="background-color: darkslategray">
                                <a href="/dashboard/packages/create" style="color:darkorange">Packages_Create</a>
                            </li>
                              <li class="list-group-item" style="background-color: darkslategray">
                                <a href="/dashboard/booking/bookingslist" style="color:darkorange">Bookings_list</a>
                            </li>
                            @endif
                            <li class="list-group-item" style="background-color: darkslategray">
                                <a href="/dashboard/packages/index" style="color:darkorange">Packages_View</a>
                            </li>

                    </div>


                    <div class="col-md-9">

                        <main class="py-4">
                            @yield('content')
                        </main>

                    </div>
                </div>
            </div>

        @else
            <main class="py-4">
                @yield('content')
            </main>

        @endauth

    </div>

    <!-- <div class="footer" style="background-color: black;width:100%;height: 25px;bottom: 0;background-color: darkslategray;color: darkorange;text-align: center" >Copyright 2020 Yous Tours. All rights reserved</div> -->
    @yield('scripts')
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
CKEDITOR.replace( 'summary-ckeditor1' );
</script>
</body>
</html>
