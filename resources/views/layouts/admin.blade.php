<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<title>{{ config('app.name', 'Collaborabiz') }}</title>
<script src="/assets/vendor/ckeditor5/build/ckeditor.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Fonts -->

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
