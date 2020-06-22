<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<style>
    img {
  position: absolute;
    }
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <div id="app">

        <nav class="navbar navbar-light" style="background-color: #6cb2eb;">

            <div class="container">






                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <img src="https://img.icons8.com/plasticine/100/000000/beer.png"width="40"/>

                        <ul class="navbar-nav mr-auto">

                        <a class="navbar-brand" href="{{ url('/') }}">

                            AlterBeer
                        </a>



                        <!-- Authentication Links -->
                        @guest
                            <span class="navbar-text">


                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>




                            @if (Route::has('register'))
                                <br>

                                       <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>


                            </span>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a href="{{ url('/logout') }}"> logout </a>

                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

<main class="py-4">
@yield('content')
</main>
</div>
</body>
</html>
