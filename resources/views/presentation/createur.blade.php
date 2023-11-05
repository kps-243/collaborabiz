<x-app-layout>
@section('content')

<livewire:hero-section :text="'Créateur'" />

<section class="py-20 lg:container mx-auto flex items-center justify-center gap-4">
    <div class="w-1/3">
        <livewire:crea-describ :imgPath="'/img/camera.svg'" :title="'Réaliser'" :text="'Réaliser votre Collabz correspondant au job
            auquel vous souhaitez participer'"/>
    </div>
    <div class="w-1/3">
        <livewire:crea-describ :imgPath="'/img/upload.svg'" :title="'Uploader'" :text="'Uploader votre Collabz sur la page que vous souhaitez'"/>
    </div>
    <div class="w-1/3">
        <livewire:crea-describ :imgPath="'/img/credit-card.svg'" :title="'Gagner'" :text="'Recevez votre paiement si votre Collabz est sélectionné.'"/>
    </div>
</section>

<livewire:interest-section :text="'Créer un compte'" :link="'/inscription/createur'" :color="'bg-blue-700'" :title="'Vous souhaitez vous lancer dans l\'UGC ?'"/>
@endsection
</x-app-layout>