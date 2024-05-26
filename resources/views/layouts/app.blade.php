<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ url('/img/logo.png') }}" type="image/png">
        <!-- Scripts -->
       
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    @livewire('navigation-menu')
                    <div class="w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @else
                <livewire:header />
            @endif
            <!-- Page Content -->
            <main> 
                @yield('content')
            </main>
            @if (isset($footer))
                <footer class="bg-white shadow">
                    <div class="w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $footer }}
                    </div>
                </footer>
                @else
                <livewire:footer />
            @endif
                
        @stack('modals')

        @livewireScripts
        <script type="text/javascript">
            tarteaucitron.user.recaptchaapi = '';
            (tarteaucitron.job = tarteaucitron.job || []).push('recaptcha');
            </script>
    
    </body>
</html>
