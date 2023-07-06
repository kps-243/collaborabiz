@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Entreprise'"/>
<section class="container mx-auto">
    <div class="w-full flex justify-center items-center">
        <div class="flex flex-col gap-9 border-black-900 border-r pr-20">
            <div class="flex flex-col text-right">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 items-center justify-end">
                        <h2 class="text-xl poppins-bold">{!! __('Créé des jobs') !!}</h2>
                        <img src="/img/inbox.svg" alt="Collaborabiz - Icon Inbox">
                    </div>
                    <p>{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
            <div class="flex flex-col text-right">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 items-center justify-end">
                        <h2 class="text-xl poppins-bold">{!! __('Sélectionner') !!}</h2>
                        <img src="/img/film.svg" alt="Collaborabiz - Icon film">
                    </div>
                    <p>{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
        </div>
        <div class="flex flex-col gap-9 pl-20">
            <div class="flex flex-col">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 items-center">
                        <img src="/img/credit-card-black.svg" alt="Collaborabiz - Icon credit-card">
                        <h2 class="text-xl poppins-bold">{!! __('Paiement') !!}</h2>
                    </div>
                    <p>{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
            <div class="flex flex-col text-right">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 items-center">
                        <img src="/img/download.svg" alt="Collaborabiz - Icon Inbox">
                        <h2 class="text-xl poppins-bold">{!! __('Télécharger') !!}</h2>
                    </div>
                    <p>{!! __('Créé des jobs auquels les créateurs peuvent postuler') !!}</p>
                </div> 
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center mt-20">
        <livewire:button :text="'Découvrer tous les détails'" :color="'bg-blue-800'" />
    </div>
</section>

@endsection