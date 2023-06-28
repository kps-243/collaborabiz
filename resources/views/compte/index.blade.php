@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Créer votre compte'" />

<section class="w-full">
    <div class="flex items-center justify-center gap-6">
        <div class="w-1/3">
            <livewire:card-compte :title="'Je suis un créateur'" :img="'compte'" :text="'Je suis un créateur et je souhaite créer de l\'ugc pour les entreprise que j\'aime.'" />
        </div>
        <div class="w-1/3">
            <livewire:card-compte :title="'Je suis une agence'" :img="'group'" :text="'Je suis une agence et je souhaite inscrire et gérer des créateurs.'" />
        </div>
        <div class="w-1/3">
            <livewire:card-compte :title="'Je suis une entreprise'" :img="'work'" :text="'Je suis une entreprise et je souhaite intégrer l\'UGC à ma stratégie marketing.'" />
        </div>
    </div>
</section>


@endsection