<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title><?php $title = config('app.name', 'Laravel'); echo $title; ?></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Styles  for specific page -->
    <link href="{{ asset('assets/product/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/product/css/timer.css')}}" rel="stylesheet">
    <!--bootstrapmain -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


<body>
    <div id="app">
        <!-- navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- app name logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logoicon/logo.png') }}" width="120" height="35" class="d-inline-block align-bottom" alt="">
                    
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                            <!-- here you can add buttons -->
                        <li class="nav-item">
                            <a class="nav-link " href="#">Actions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('product.product')}}">Products</a>
                            
                        </li>
                        @guest
                        @else
                            @if(Auth::user()->role_id==3)
                                @php
                                    $i=Auth::user()->id
                                @endphp
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('product.products', $i )}}">My Products</a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('product.product.create')}}">Add Products</a>
                                    
                                </li>
                            @endif
                        @endguest
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-sharp fa-solid fa-circle-user fa-xl"></i> {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('user.user')}}" > <i class="fa-solid fa-user"></i> Profile</a>

                                    <a class="dropdown-item" href="{{route('user.user.history', Auth::user()->id)}}" > <i class="fa-sharp fa-solid fa-gavel"></i> My Bids</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                                    <form id="profile-form" action="{{ route('user.user')}}" class="d-none">
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
