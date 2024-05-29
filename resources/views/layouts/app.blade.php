<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Collaborabiz') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ url('/img/logo.png') }}" type="image/png">
        <!-- Scripts -->
        <script src="tarteaucitron.js/tarteaucitron.js"></script>
        <script type="text/javascript">
            tarteaucitron.init({
              "privacyUrl": "", /* Privacy policy url */
              "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */
    
              "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
              "cookieName": "tarteaucitron", /* Cookie name */
        
              "orientation": "middle", /* Banner position (top - bottom) */
           
              "groupServices": false, /* Group services by category */
              "showDetailsOnClick": true, /* Click to expand the description */
              "serviceDefaultState": "wait", /* Default state (true - wait - false) */
                               
              "showAlertSmall": false, /* Show the small banner on bottom right */
              "cookieslist": false, /* Show the cookie list */
                               
              "closePopup": false, /* Show a close X on the banner */
    
              "showIcon": true, /* Show cookie icon to manage cookies */
              //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
              "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */
    
              "adblocker": false, /* Show a Warning if an adblocker is detected */
                               
              "DenyAllCta" : true, /* Show the deny all button */
              "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
              "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
              "alwaysNeedConsent": false, /* Ask the consent for "Privacy by design" services */
                               
              "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */
    
              "removeCredit": false, /* Remove credit link */
              "moreInfoLink": true, /* Show more info link */
    
              "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
              "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */
    
              //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                              
              "readmoreLink": "", /* Change the default readmore link */
    
              "mandatory": true, /* Show a message about mandatory cookies */
              "mandatoryCta": true, /* Show the disabled accept button when mandatory on */
        
              //"customCloserId": "", /* Optional a11y: Custom element ID used to open the panel */
              
              "googleConsentMode": true, /* Enable Google Consent Mode v2 for Google ads and GA4 */
              
              "partnersList": false /* Show the number of partners on the popup/middle banner */
            });
        </script>
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
