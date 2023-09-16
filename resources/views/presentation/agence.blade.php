@extends('layouts.guest')
@section('content')

<livewire:hero-section :text="'Agence'" />

<section class="py-20">
    <div class="container mx-auto flex gap-20 w-full">
        <div class="flex flex-col gap-2 w-1/5">
            <p class="border-l-2 border-solid border-blue-700 pl-1">{!!__('Le compte agence') !!}</p>
            <p class="">{!!__('Les Caractéristiques du compte') !!}</p>
        </div>
        <div class="flex flex-col w-4/5 gap-4">
            <div class="flex flex-col">
                <h2 class="text-[50px] poppins-extrabold">{!!__('Le compte agence') !!}</h2>
                <p>{!!__('Le compte agence est destiné aux agents qui veulent inscrir un ou plusieurs créateurs.') !!}</p>
            </div>
            <div class="flex flex-col">
                <h2 class="text-[50px] poppins-extrabold">{!!__('Caractéristiques du compte') !!}</h2>
                <p>{!!__('Ce compte est fait pour un agent qui gère 1 ou plusieurs créateurs et possède donc des fonctionnalitées
                différentes. Vous pouvez créer plusieurs comptes créateurs et les gérer indpendament les uns des autres, 
                pour avoir un suivi des candidatures et des jobs') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto flex flex-col gap-10">
        <h3 class="text-[35px] poppins-bold">{!!__('Fonctionnalités spécifiques') !!}</h3>
        <div class="flex flex-col gap-4">
            <div class="flex gap-6">
                <img class="rounded-full px-3 py-3 bg-blue-700" src="/img/group.svg" alt="Collaborabiz - Icon groupe">
                <div class="flex flex-col gap-1 justify-center">
                    <h4 class="text-xl poppins-bold">{!!__('Gestion des créateurs') !!}</h4>
                    <p>{!!__('Gérer 1 ou plusieurs créateurs depuis 1 seule compte.') !!}</p>
                </div>
            </div>
            <div class="flex gap-6">
                <img class="rounded-full px-3 py-3 bg-blue-700" src="/img/group.svg" alt="Collaborabiz - Icon groupe">
                <div class="flex flex-col gap-1 justify-center">
                    <h4 class="text-xl poppins-bold">{!!__('Gestion des paiements') !!}</h4>
                    <p>{!!__('Gérer les paiements en fonctions des commissions.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<livewire:interest-section :text="'Créer un compte'" :color="'bg-blue-700'" :link="'/inscription/agence'" :title="'Vous souhaitez développer les opportunités de vos créateurs, <br>lancez-vous dans l\'UGC !'"/>
@endsection