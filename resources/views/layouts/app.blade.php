<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/logo.svg" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="d-flex">
        @auth
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height:100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="/logo.svg">
                    <span class=" px-2">Traktir</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" @class([
                            'nav-link  d-flex aligns-item-center text-white gap-2',
                            'active' => Route::currentRouteName() == 'home',
                        ]) aria-current="page">
                            @include('icons/home')
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link  d-flex aligns-item-center text-white gap-2">
                            @include('icons/dashboard')
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link  d-flex aligns-item-center text-white gap-2">
                            @include('icons/line')
                            Analystics
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('page.index') }}" @class([
                            'nav-link  d-flex aligns-item-center text-white gap-2',
                            'active' => Route::currentRouteName() == 'page.index',
                        ]) aria-current="page">
                            @include('icons/page')
                            Page
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link  d-flex aligns-item-center text-white gap-2">
                            @include('icons/user')
                            Supporters
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/placeholder-user.jpg" alt="" class="rounded-circle me-2" width="32"
                            height="32">
                        <strong>{{ auth()->user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Page</a></li>
                        <li><a class="dropdown-item" href="#">Analitic</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <input class=" dropdown-item" type="submit" value="Logout" />
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
            <div class="w-full">
                <header class="site-header">
                    <div class="container">
                        <div class="site-header-inner">
                            <div class="brand header-brand">
                                @guest
                                    <h1 class="m-0">
                                        <a href="/" class="text-decoration-none d-inline-flex align-items-center">
                                            <img class="header-logo-image" src="/logo.svg" alt="Logo">
                                            <span class="text-sm p-2 text-white">Traktir</span>
                                        </a>
                                    </h1>
                                @else
                                    <h1 class="m-0">
                                        Home
                                    </h1>
                                    @endif
                                </div>
                                <div class="position-relative z-100">
                                    @guest
                                        <a role="button" href="{{ route('register') }}" class="text-decoration-none">
                                            <button class="btn btn-primary">Daftar</button>
                                        </a>

                                        <a role="button" href="{{ route('login') }}" class="text-decoration-none">
                                            <button class="btn">Masuk</button>
                                        </a>
                                        @endif
                                        @auth
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    {{ auth()->user()->name }}
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark">
                                                    <li><a class="dropdown-item" href="#">Page</a></li>
                                                    <li><a class="dropdown-item" href="#">Analitic</a></li>
                                                    <li><a class="dropdown-item" href="#">Setting</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <form action="/logout" method="POST">
                                                            @csrf
                                                            <input class=" dropdown-item" type="submit" value="Logout" />
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <main class="py-4">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </body>

                </html>
