@extends('layouts.app')

@section('content')

<div class="bg-home bg-cover h-96">
    <div class="container mx-auto flex items-center justify-center h-full">
        <h1 class="text-white text-center text-7xl">Donnez vie à votre Marque</h1>
    </div>
    <svg class="waves -mt-60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
</div>

{{-- Service --}}
<section class="container mx-auto">
    <div class="w-full flex items-center justify-center flex-row sm:flex-col">
        <div class="w-1/2">
            <img class="rounded-full" src="/img/service.jpg" alt="Image - Presentation des services">
        </div>
        <div class="w-1/2 px-5">
            <h2 class="text-blue-700 text-2xl py-3">Les services de Collaborabiz</h2>
            <p class="text-base">Les services de Collaborabiz sont nombreux et permettent de faciliter les campagnes UGC 
                pour toutes les entreprises et tous types de créateur.
            </p>
            <div class="flex gap-3 my-6">
                <button class="px-8 py-2 bg-blue-800"><a class="text-white flex-nowrap" href="#">Je suis un créateur</a></button>
                <button class="px-8 py-2 bg-blue-800"><a class="text-white flex-nowrap" href="#">Je suis une entreprise</a></button>
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
    <div class="container mx-auto py-32">
        <div class="w-full flex items-center justify-center flex-row sm:flex-col gap-6">
            <div class="w-1/3 px-5 bg-blue-700">
                <h2 class="text-white text-2xl py-3 uppercase font-bold">L'ugc ?</h2>
                <p class="text-white text-base py-3">UGC signifie User Generated Content, en français c'est le contenu généré par 
                les utilisateurs</p>
                <p class="text-white text-base py-3">L'UGC peut être sous forme d'avis client, de photos ou de vidéos sur les résaux sociaux, les blogs
                ou les espaces d'échanges. 
                les utilisateurs</p>
                <div class="flex gap-3 my-6">
                    <button class="px-8 py-2 bg-white"><a class="text-black flex-nowrap" href="#">En apprendre plus sur l'UGC</a></button>
                </div>
            </div>
            <div class="w-1/2">
                <img class="rounded-full" src="/img/service.jpg" alt="Image - Presentation des services">
            </div>
        </div>
    </div>
</section>
<svg class="waves -mt-60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
<div class="container mx-auto my-6">
    <h2 class="text-center text-2xl font-bold py-6">Nos entreprises partenaires</h2>
    <div class="flex flex-wrap justify-between py-6">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
        <img src="/img/peugeot-logo.png" class="w-16 h-16" alt="Logo - Entreprise">
    </div>
</div>

<style>
    .bg-home{
        background-image: url("/img/bg-home.jpg");
    }
</style>
@endsection
