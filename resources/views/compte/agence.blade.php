@extends('layouts.app')
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
                <h2 class="text-[50px] poppins-bold">{!!__('Le compte agence') !!}</h2>
                <p>{!!__('Le compte agence est destiné aux agents qui veulent inscrir un ou plusieurs créateurs.') !!}</p>
            </div>
            <div class="flex flex-col">
                <h2 class="text-[50px] poppins-bold">{!!__('Caractéristiques du compte') !!}</h2>
                <p>{!!__('Ce compte est fait pour un agent qui gère 1 ou plusieurs créateurs et possède donc des fonctionnalitées
                différentes. Vous pouvez créer plusieurs comptes créateurs et les gérer indpendament les uns des autres, 
                pour avoir un suivi des candidatures et des jobs') !!}</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto">
        <h3 class="text-[35px] poppins-bold">{!!__('Fonctionnalité spécifiques') !!}</h3>
    </div>
</section>

@endsection