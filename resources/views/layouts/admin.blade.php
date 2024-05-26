<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<title>{{ config('app.name', 'Collaborabiz') }}</title>
<script src="/assets/vendor/ckeditor5/build/ckeditor.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Fonts -->

<!-- Scripts -->
<script src="https://cdn.tailwindcss.com"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles
</head>

<body class="font-sans antialiased admin">
    {{-- <x-banner /> --}}

    <div class="min-h-screen ">
        {{-- @livewire('navigation-menu') --}}

        <div class="flex">
            <div class="w-2/12 bg-blue-600 text-white p-5 min-h-screen">
                @livewire('sidebar')
            </div>
            <div class="w-10/12">
                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        @yield('header')
                    </div>
                </header>

                <!-- Page Content -->
                <main class="container mx-auto">
                    @yield('content')
                </main>
            </div>
        </div>




    </div>

    @stack('modals')

    @livewireScripts
    @stack('scripts')

</body>

</html>
