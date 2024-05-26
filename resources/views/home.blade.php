<x-app-layout>
@section('content')

<livewire:hero-section :text="'Donnez vie à votre marque'" :img="'nubelson-fernandes-StCctReSjzs-unsplash.jpg'" />

{{-- Service --}}
<section class="container mx-auto px-4 lg:px-0">
    <div class="w-full flex items-center justify-center gap-4 sm:flex-row flex-col mt-6">
        <div class="lg:w-1/2">
            <img class="" src="/img/imac.svg" alt="Image - Presentation des services">
        </div>
        <div class="lg:w-1/2 lg:px-5">
            <h2 class="text-blue-700 text-2xl py-3">Les services de Collaborabiz</h2>
            <p class="text-base">Les services de Collaborabiz sont nombreux et permettent de faciliter les campagnes UGC 
                pour toutes les entreprises et tous types de créateur.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 my-6">
                <livewire:button :text="'Créateur'" :link="'/presentation/createur'" :color="'bg-blue-800'" />
                <livewire:button :text="'Entreprise'" :link="'/presentation/entreprise'" :color="'bg-blue-800'" />
                {{-- <livewire:button :text="'Agence'" :link="'/presentation/agence'" :color="'bg-blue-800'" /> --}}
            </div>
        </div>
    </div>
</section>
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
{{-- UGC --}}
<section class="bg-blue-700">
    <div class="container mx-auto lg:py-32 py-16 px-4 lg:px-0">
        <div class="w-full flex items-center justify-center sm:flex-row flex-col gap-10 z-[200] relative">
            <div class="lg:w-1/3 bg-blue-700">
                <h2 class="text-white text-2xl py-3 uppercase font-bold">L'ugc ?</h2>
                <p class="text-white text-base py-3">UGC signifie User Generated Content, en français c'est le contenu généré par 
                les utilisateurs</p>
                <p class="text-white text-base py-3">L'UGC peut être sous forme d'avis client, de photos ou de vidéos sur les résaux sociaux, les blogs
                ou les espaces d'échanges.</p>
                <div class="flex gap-3 my-6">
                    <a class="text-black flex-nowrap" href="/ugc">
                        <button class="px-8 py-2 bg-white">En apprendre plus sur l'UGC</button>
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2">
                <img class="rounded-full " src="/img/aqviews-mfWsMDdN-Ro-unsplash.jpg" alt="Collaborabiz - Presentation des services">
            </div>
        </div>
    </div>
</section>
<svg class="hidden lg:block waves -mt-60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(248,250,252,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(248,250,252,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(248,250,252,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
</svg>
{{-- <div class="container mx-auto py-16">
    <h2 class="text-center text-2xl font-bold py-6">Nos entreprises partenaires</h2>
    <div class="flex flex-wrap justify-between py-6">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
    </div>
</div> --}}

<style>
    .bg-home{
        background-image: url("/img/bg-home.jpg");
    }
</style>
@endsection
</x-app-layout>
