<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'Default')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/assets/css/app.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{{asset('build/assets/css/nav-footer.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/melvin.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/app.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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

    <footer class="footer">
        <div class="footer container">
            <div class="footer-row">
                <div class="footer-items">
                    <ul>
                        <h4>Find Talent</h4>
                        <li><a href="#">How to Hire</a></li>
                        <li><a href="#">Limitation</a></li>
                        <li><a href="#">Report Talent</a></li>
                    </ul>
                </div>
                <div class="footer-items"> 
                    <ul>
                        <h4>Find Work</h4>
                        <li><a href="#">How to find work</a></li>
                        <li><a href="#">Tips</a></li>
                        <li><a href="#">Report Client</a></li>
                    </ul>
                </div>
                <div class="footer-items">
                    <ul>
                        <h4>Resources</h4>
                        <li><a href="#">Help and Support</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
                <div class="footer-items">
                    <ul>
                        <li><h4>Company</h4></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> 
                </div>
            </div>
            <div class="social-links">
                <h4>Social Handles: </h4>
                <span>
                    <a href="www.facebook.com"><i class="bi bi-facebook fs-1 text-success ms-4"></i></a>
                    <a href="www.github.com"><i class="bi bi-github fs-1 text-success ms-4"></i></a>
                    <a href="www.linkedin.com"><i class="bi bi-linkedin fs-1 text-success ms-4"></i></a>
                    <a href="www.facebook.com"><i class="bi bi-messenger fs-1 text-success ms-4"></i></a>
                    <a href="www.twitter.com"><i class="bi bi-twitter fs-1 text-success ms-4"></i></a>
                </span>
            </div>
        </div>
    </footer>
</body>
</html>
