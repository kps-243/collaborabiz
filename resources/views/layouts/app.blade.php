<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="app">
        <nav class="bg-white h-12">
            <div class="container flex items-center">
                <a class="" href="#">
                    <img src="/img/logo.png" class="h-10 w-10" alt="Logo - Collaborabiz">
                </a>
                <ul class="flex gap-3 mx-5">
                    <a href="#"><li>Créateur</li></a>
                    <a href="#"><li>Agence</li></a>
                    <a href="#"><li>Entreprise</li></a>
                </ul>
                
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ms-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
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
                        @endguest -->
                    <!-- </ul>
                </div> -->
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <footer>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,64,255,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,64,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0,64,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#0040FF" />
                </g>
            </svg>
            <div class="flex flex-col sm:flex-row justify-center bg-blue-800 w-full text-white py-16">
              <div class="container mx-auto flex"> 
                <div class="w-1/3 flex flex-col justify-center gap-y-4">
                    <h2 class="text-xl">Conçu pour toutes les entreprises et les créateurs</h2>
                    <p class="text-base">Nous sommes une équipe de passionnés dont le but est de facilité la vie de chacun grâce à des services adaptés. 
                        Nos services sont conçu pour les petites, moyennes, et grandes entreprises désireuses d'optimiser leurs performances,
                        ainsi qu'a tout les créateurs ayant une envie de libérer l'étendue de leur talent.
                    </p>
                </div>
                <div class="w-1/3 flex justify-center px-5">
                    <ul>
                        <li>Collaborabiz</li>
                        <li>72 avenue de l'Europe</li>
                        <li>Velizy-Villacoublay</li>
                        <li>France</li>
                    </ul>
                </div>
                <div class="w-1/3 flex flex-col px-5 gap-2">
                    <div>
                        <a target="_blank" class="flex gap-2 items-center" href="tel:+33766843678">
                            <img src="/img/phone.svg" class="h-8 w-8 invert" alt="Collaborabiz - Téléphone">
                            <span>+ 33 7 66 84 36 78</span>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" class="flex gap-2 items-center" href="mailto:collaborabiz@gmail.com">
                            <img src="/img/mail.svg" class="h-8 w-8 invert" alt="Collaborabiz - Mail">
                            <span>collaborabiz@gmail.com</span>
                        </a>
                    </div>
                    <div class="flex gap-3">
                        <a target="_blank" href="#">
                            <img src="/img/twitter.svg" class="h-8 w-8 invert" alt="Collaborabiz - Twitter">
                        </a>
                        <a target="_blank" href="#">
                            <img src="/img/insta.svg" class="h-8 w-8 invert" alt="Collaborabiz - Instagram">
                        </a>
                        <a target="_blank" href="#">
                            <img src="/img/linkedin.svg" class="h-8 w-8 invert" alt="Collaborabiz - Linkedin">
                        </a>
                        <a target="_blank" href="#">
                            <img src="/img/tiktok.svg" class="h-8 w-8 invert" alt="Collaborabiz - Tiktok">
                        </a>
                    </div>
                </div>
              </div> 
            </div>
            <section class="w-full bg-blue-900 text-white h-10 flex items-center">
                <div class="container mx-auto">
                    <div class="flex">
                        <span>CopyRight&#169; Collaborabiz</span> 
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>
</html>
