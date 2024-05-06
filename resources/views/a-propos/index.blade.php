<x-app-layout>
@section('content')

<livewire:hero-section :text="'A propos de nous'" />
<section>
    <div class="container mx-auto py-32">
        <div class="w-full flex items-center sm:flex-row flex-col gap-16 lg:gap-28">
            <div class="flex flex-col gap-2 w-3/4 lg:w-1/3 px-10 pt-10 pb-10 lg:pb-36 bg-blue-800">
                <h2 class="text-white lg:text-4xl lg:leading-10 text-2xl w-full lg:w-3/5 poppins-bold">{!! __('Notre mission') !!}</h2>
                <p class="text-white text-base py-2">{!! __('Notre objectif est de rendre le contenu UGC accéssible 
                à toutes les entreprises et à un prix abordable. Tout en proposant aux créateurs une nouvelle façon libérer
                leur talent.') !!}</p>
                <div class="w-full lg:w-1/2">
                    <livewire:button :link="'/ugc'" :text="'En savoir plus'" :color="'bg-blue-700'" />
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <img class="px-4 rounded-full z-50" src="/img/service.jpg" alt="Collaborabiz - Presentation des services">
            </div>
        </div>
    </div>
</section>


{{-- Nos services --}}
<x-info>
    <x-slot name="nav">
        <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'nos-services' }" @click="activeSection = 'nos-services'; activeLi = 'nos-services'">
            <a href="#nos-services">{!! __('Nos services') !!}</a>
        </li>
        <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'comment-ca-marche' }" @click="activeSection = 'comment-ca-marche'; activeLi = 'comment-ca-marche'">
            <a href="#comment-ca-marche">{!! __('Comment ça marche ?') !!}</a>
        </li>
        <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'les-paiements' }" @click="activeSection = 'les-paiements'; activeLi = 'les-paiements'">
            <a href="#les-paiements">{!! __('Les paiements') !!}</a>
        </li>
    </x-slot>
    <x-slot name="content">
        <div id="nos-services" class="flex flex-col gap-4">
            <livewire:title-info :text="'Nos services'" />
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les créateurs') !!}</h2>
                    <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                    de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                </div>
                {{-- <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les agences') !!}</h2>
                    <p>{!! __('Pour les agents nous offrons la possibiilité d\'inscrir et de gérer plusieurs créateurs au sein d\'un
                    même compte.') !!}</p>
                </div> --}}
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les entreprises') !!}</h2>
                    <p>{!! __('Pour les entreprises, nous offrons une toute nouvelle plateforme pour gérer vos campagnes UGC
                    grâce à de nombreux créateur UGC ') !!}</p>
                </div> 
            </div>
        </div>
        <div id="comment-ca-marche" class="flex flex-col gap-4">
            <livewire:title-info :text="'Comment ça marche ?'" />
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les créateurs') !!}</h2>
                    <p>{!! __('Vous pouvez choisir entre toutes les annores de jobs celle qui vous donne envie, pour y participer. Si votre Collabz est retenu par
                     l\'entreprise pour sa campagne UGC vous recevrez votre paiement selon le niveau du job.') !!}</p>
                </div>
                {{-- <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les agences') !!}</h2>
                    <p>{!! __('Vous pouvez parcourir les jobs et les proposer à vos différents créateurs. Une fois qu\'ils ont validé 
                    les jobs et réalisé les vidéos vous pouvez les uploader sur la page du job 
                    et attendre la décision de l\'entreprise. Ce compte offre une gestion totale des différents créateurs.') !!}</p>
                </div> --}}
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les entreprises') !!}</h2>
                    <p>{!! __('Vous pouvez poster des jobs en détaillant plusieurs informations comme 
                    le niveau souhaité de la réalisation débutant, intermédiaire ou professionnel), la durée de la Collabz, un brief, etc. 
                    Une fois le job poster les créateurs peuvent postuler, ensuite c\'est à 
                    vous de choisir les collabz que vous souhaiter acheter et utiliser pour votre campagne.') !!}</p>
                </div> 
            </div>
        </div>
        <div  id="les-paiements" class="flex flex-col gap-4">
            <livewire:title-info :text="'Les paiements'" />
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les créateurs') !!}</h2>
                    <p>{!! __('Si votre Collabz est retenu par l\'entreprise pour sa campagne UGC vous recevrez vote paiement sur vote cagnotte collaborabiz,
                     vous pourrez ensuite les retirer.') !!}</p>
                </div>
                {{-- <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les agences') !!}</h2>
                    <p>{!! __('Si la Collabz d\'un de vos créateurs est retenu par l\'entreprise pour sa campagne UGC vous recevrez votre paiement sur la cagnotte collaborabiz de l\'agent, vous pourrez ensuite procéder au paiement sur le compte du créateur selon vos commissions.') !!}</p>
                </div> --}}
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl poppins-bold">{!! __('Pour les entreprises') !!}</h2>
                    <p>{!! __('Vous pouvez réaliser les paiements par virement bancaire instantané, 
                    par carte bleue ou bien PayPal. Le prix varie selon le niveau et le nombre de Collab sélectionner.') !!}</p>
                </div> 
            </div>
        </div>
    </x-slot>
</x-info>

{{-- Questions --}}
<section class="py-20 flex justify-center items-center">
    <div class="flex flex-col gap-10">
        <h1 class="lg:text-5xl text-3xl text-center poppins-bold">{!! __('Pour toutes autres questions') !!}</h1>
        
        {{-- <livewire:input :type="'text'" :label="'* Nom'" :name="'nom'">
        <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'phone'">
        <livewire:input :type="'mail'" :label="'* Mail'" :name="'mail'">
        <livewire:input :type="'text'" :label="'Votre entreprise'" :name="'work'">
        <livewire:input :type="'text'" :label="'* Objet'" :name="'link'">  
        <livewire:textarea :text="'* Votre question'" :rows="'3'" /> --}}
        <livewire:button :text="'Nous Contactez'" :color="'bg-blue-800'" :link="'/contact'" />
    </div>
</section>

@endsection
</x-app-layout>