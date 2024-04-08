<x-app-layout>
@section('content')

<livewire:hero-section :text="'Créateur'" />
<section class="container mx-auto flex flex-col gap-7 py-10 px-4 lg:px-0">
    <p class="w-full"><span class="text-blue-700 font-bold">Transformer votre passion en opportunité</span> , chez Collaborabiz, nous comprenons que chaque créateur a une histoire unique à raconter et un talent à partager. 
        Notre mission est de vous connecter avec des marques qui valorisent votre créativité et souhaitent collaborer pour créer du contenu authentique et inspirant.</p>
    <p class="w-full">Prêt à donner une nouvelle dimension à votre carrière de créateur UGC ? <a class="text-blue-700" href="/register">Rejoignez</a> la communauté Collaborabiz dès aujourd'hui et soyez les premiers à explorer des opportunités de collaboration qui valoriseront vraiment votre travail.</p>
</section>
<section class="py-10 lg:py-20 lg:container mx-auto flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-4 px-4 lg:px-0">
    <div class="w-full lg:w-1/3">
        <livewire:crea-describ :imgPath="'/img/camera.svg'" :title="'Réaliser'" :text="'Réaliser votre Collabz correspondant au job
            auquel vous souhaitez participer'"/>
    </div>
    <div class="w-full lg:w-1/3">
        <livewire:crea-describ :imgPath="'/img/upload.svg'" :title="'Uploader'" :text="'Uploader votre Collabz sur la page que vous souhaitez'"/>
    </div>
    <div class="w-full lg:w-1/3">
        <livewire:crea-describ :imgPath="'/img/credit-card.svg'" :title="'Gagner'" :text="'Recevez votre paiement si votre Collabz est sélectionné.'"/>
    </div>
</section>

<livewire:interest-section :text="'Créer un compte'" :link="'/register'" :color="'bg-blue-700'" :title="'Vous souhaitez vous lancer dans l\'UGC ?'"/>
@endsection
</x-app-layout>