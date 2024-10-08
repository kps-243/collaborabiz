<x-app-layout>
@section('content')

<livewire:hero-section :text="'Créer votre compte'" />

<section class="w-full py-24">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center gap-6">
        <div class="w-full lg:w-1/2">
            <livewire:card-compte :title="'Je suis un créateur'" :img="'compte'" :link="'/presentation/createur'" :text="'Je suis un créateur et je souhaite créer de l\'ugc pour les entreprise que j\'aime.'" />
        </div>
        {{-- <div class="w-full lg:w-1/3">
            <livewire:card-compte :title="'Je suis une agence'" :img="'group'" :link="'/presentation/agence'" :text="'Je suis une agence et je souhaite inscrire et gérer des créateurs.'" />
        </div> --}}
        <div class="w-full lg:w-1/2">
            <livewire:card-compte :title="'Je suis une entreprise'" :img="'work'" :link="'/presentation/entreprise'" :text="'Je suis une entreprise et je souhaite intégrer l\'UGC à ma stratégie marketing.'" />
        </div>
    </div>
</section>


@endsection
</x-app-layout>