<x-app-layout>
@section('content')

<livewire:hero-section :text="'Entreprise'"/>
<section class="container mx-auto flex flex-col gap-7 py-10 px-4 lg:px-0">
    <p class="w-full"><span class="text-blue-700 font-bold">Dynamiser votre marque avec du contenue généré par les utilisateurs.</span>Dans un monde où l'authenticité et la connexion personnelle 
        avec les consommateurs sont clés, le contenu généré par les utilisateurs (UGC) se révèle être un outil marketing inestimable. 
        Collaborabiz vous connecte avec des créateurs de contenu talentueux pour vous aider à raconter l'histoire de votre marque d'une manière qui résonne vraiment avec votre audience.</p>
    <p class="w-full">Prêts à explorer comment le contenu généré par les utilisateurs peut transformer votre marketing ? <a class="text-blue-700" href="/register">Rejoignez Collaborabiz</a> 
        aujourd'hui et soyez les premiers à explorer des opportunités 
        de collaboration avec des créateurs de contenu UGC qui peuvent apporter une nouvelle dimension à votre marque.</p>
</section>
<section class="container mx-auto py-20">
    <div class="w-full flex flex-col lg:flex-row gap-9 lg:gap-0 justify-center items-center">
        <div class="flex flex-col gap-9 border-black-900 lg:border-r lg:pr-20">
            <div class="flex flex-col text-center lg:text-right">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row-reverse lg:flex-row gap-2 items-center justify-center lg:justify-end">
                        <h2 class="text-xl poppins-bold">{!! __('Créé des jobs') !!}</h2>
                        <img src="/img/inbox.svg" alt="Collaborabiz - Icon Inbox">
                    </div>
                    <p class="px-4 lg:px-0">{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
            <div class="flex flex-col text-center lg:text-right">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row-reverse lg:flex-row gap-2 items-center justify-center lg:justify-end">
                        <h2 class="text-xl poppins-bold">{!! __('Sélectionner') !!}</h2>
                        <img src="/img/film.svg" alt="Collaborabiz - Icon film">
                    </div>
                    <p class="px-4 lg:px-0">{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
        </div>
        <div class="flex flex-col gap-9 lg:pl-20">
            <div class="flex flex-col text-center lg:text-left">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 items-center justify-center lg:justify-start">
                        <img src="/img/credit-card-black.svg" alt="Collaborabiz - Icon credit-card">
                        <h2 class="text-xl poppins-bold">{!! __('Paiement') !!}</h2>
                    </div>
                    <p class="px-4 lg:px-0">{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
            <div class="flex flex-col text-center lg:text-right">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 items-center justify-center lg:justify-start">
                        <img src="/img/download.svg" alt="Collaborabiz - Icon Inbox">
                        <h2 class="text-xl poppins-bold">{!! __('Télécharger') !!}</h2>
                    </div>
                    <p class="px-4 lg:px-0">{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center mt-20">
        <livewire:button :text="'Découvrer tous les détails'" :color="'bg-blue-800'" :link="'/a-propos'" />
    </div>
</section>

{{-- <section class="pb-10">
    <div class="container mx-auto flex flex-col text-center gap-10">
        <livewire:title-info :text="'Les Tarifs'" />
        <livewire:tarif />
    </div>
</section> --}}

@endsection
</x-app-layout>