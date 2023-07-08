<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</head>
<body>
    <div id="app">
        <nav class="sticky top-0 bg-white h-full">
            <div class="container mx-auto py-2 flex justify-between items-center">
                <div class="flex items-center h-full">
                    <a class="" href="/">
                        <img src="/img/logo.png" class="h-10 w-10" alt="Logo - Collaborabiz">
                    </a>
                    <ul class="flex gap-3 mx-5">
                        <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/createur"><li>{!! __('Créateur') !!}</li></a>
                        <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/agence"><li>{!! __('Agence') !!}</li></a>
                        <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/entreprise"><li>{!! __('Entreprise') !!}</li></a>
                    </ul>
                </div>
                <div class="h-full" x-data="{ hover: ''}"  @mouseenter="hover = true" @mouseleave="hover = false">
                    <a class="text-white flex-nowrap" href="/presentation"
                        :class="{ 'hover:text-blue-800': hover }">
                        <button  class="px-2 py-2 rounded-md bg-blue-700 transition-all duration-300"
                        :class="{ 'hover:bg-blue-300': hover }">
                        {!!__('Crée un compte') !!}
                        </button> 
                    </a>
                </div>
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
            <div class="flex flex-col sm:flex-row justify-center bg-blue-800 w-full text-white py-16">
              <div class="container mx-auto flex gap-20"> 
                <div class="w-1/6 flex flex-col gap-4">
                    <h2 class="text-2xl poppins-bold">{!! __('Lien utiles') !!}</h2>
                    <ul>
                        <a class="hover:text-blue-500 transition-all duration-300"href="/"><li>{!! __('Page d\'acceuil') !!}</li></a>
                        <a class="hover:text-blue-500 transition-all duration-300"href="/ugc"><li>{!! __('L\'UGC') !!}</li></a>
                        <a class="hover:text-blue-500 transition-all duration-300"href="/a-propos"><li>{!! __('A propos de nous') !!}</li></a>
                        <a class="hover:text-blue-500 transition-all duration-300"href="/"><li>{!! __('Politique de confidentialité') !!}</li></a>
                        <a class="hover:text-blue-500 transition-all duration-300"href="/"><li>{!! __('Mentions Légales') !!}</li></a>
                    </ul>
                </div>
                <div class="w-3/6 flex flex-col gap-y-4">
                    <h2 class="text-2xl poppins-bold">{!! __('A propos de nous') !!}</h2>
                    <p class="text-base">{!! __('Nous sommes une équipe de passionnés dont le but est de facilité la vie de chacun grâce à des services adaptés. 
                        Nos services sont conçu pour les petites, moyennes, et grandes entreprises désireuses d\'optimiser leurs performances,
                        ainsi qu\'a tout les créateurs ayant une envie de libérer l\'étendue de leur talent.') !!}
                    </p>
                </div>
                <div class="w-2/6 flex flex-col gap-3">
                    <h2 class="text-2xl poppins-bold">{!! __('Rejoignez-nous') !!}</h2>
                    <div class="flex flex-col">
                        <div>
                            <a target="_blank" class="flex gap-2 items-center hover:text-blue-500 transition-all duration-300" href="/contact">
                                <img src="/img/chat-bubble.svg" class="h-5 w-5" alt="Collaborabiz - Téléphone">
                                <span>{!! __('Contactez-nous') !!}</span>
                            </a>
                        </div>
                        <div>
                            <a target="_blank" class="flex gap-2 items-center hover:text-blue-500 transition-all duration-300" href="tel:+33766843678">
                                <img src="/img/phone.svg" class="h-5 w-5 invert" alt="Collaborabiz - Téléphone">
                                <span>+ 33 7 66 84 36 78</span>
                            </a>
                        </div>
                        <div>
                            <a target="_blank" class="flex gap-2 items-center hover:text-blue-500 transition-all duration-300" href="mailto:collaborabiz@gmail.com">
                                <img src="/img/mail.svg" class="h-5 w-5 invert" alt="Collaborabiz - Mail">
                                <span>collaborabiz@gmail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a target="_blank" href="#" class="hover:pt-2 transition-all duration-300">
                            <img src="/img/twitter.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Twitter">
                        </a>
                        <a target="_blank" href="#" class="hover:pt-2 transition-all duration-300">
                            <img src="/img/insta.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Instagram">
                        </a>
                        <a target="_blank" href="#" class="hover:pt-2 transition-all duration-300">
                            <img src="/img/linkedin.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Linkedin">
                        </a>
                        <a target="_blank" href="#" class="hover:pt-2 transition-all duration-300">
                            <img src="/img/tiktok.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Tiktok">
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
