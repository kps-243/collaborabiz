@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'A propos de nous'" />
<section>
    <div class="container mx-auto py-32">
        <div class="w-full flex items-center sm:flex-row flex-col gap-28">
            <div class="flex flex-col gap-2 w-1/3 px-10 pt-10 pb-36 bg-blue-800">
                <h2 class="text-white lg:text-4xl lg:leading-10 text-2xl w-full lg:w-3/5 poppins-bold">{!! __('Notre mission') !!}</h2>
                <p class="text-white text-base py-2">{!! __('Notre objectif est de rendre le contenu UGC accéssible 
                à toutes les entreprises et à un prix abordable. Tout en proposant aux créateurs une nouvelle façon libérer
                leur talent.') !!}</p>
                <div class="w-1/2">
                    <livewire:button :text="'En savoir plus'" :color="'bg-blue-700'" />
                </div>
            </div>
            <div class="w-1/2">
                <img class="rounded-full z-50" src="/img/service.jpg" alt="Collaborabiz - Presentation des services">
            </div>
        </div>
    </div>
</section>


{{-- Nos services --}}
<section class="py-2 w-full">
    <div class="container mx-auto w-full flex">
        <aside class="sticky top-10 h-full flex flex-col justify-start w-3/12">
            <ul class="flex flex-col gap-3 text-lg" x-data="{ activeSection: '', activeLi: '' }">
                <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'nos-services' }" @click="activeSection = 'nos-services'; activeLi = 'nos-services'">
                    <a href="#nos-services">{!! __('Nos services') !!}</a>
                </li>
                <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'comment-ca-marche' }" @click="activeSection = 'comment-ca-marche'; activeLi = 'comment-ca-marche'">
                    <a href="#comment-ca-marche">{!! __('Comment ça marche ?') !!}</a>
                </li>
                <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'les-paiements' }" @click="activeSection = 'les-paiements'; activeLi = 'les-paiements'">
                    <a href="#les-paiements">{!! __('Les paiements') !!}</a>
                </li>
            </ul>
        </aside>
        <div class="container mx-auto w-9/12">
            <div class="flex flex-col gap-12">
                <div id="nos-services" class="flex flex-col gap-4">
                    <h1 class="text-3xl lg:text-6xl poppins-bold">{!! __('Nos services') !!}</h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les créateurs') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les agences') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les entreprises') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div> 
                    </div>
                </div>
                <div id="comment-ca-marche" class="flex flex-col gap-4">
                    <h1 class="text-3xl lg:text-6xl poppins-bold">{!! __('Comment ça marche ?') !!}</h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les créateurs') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les agences') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les entreprises') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div> 
                    </div>
                </div>
                <div  id="les-paiements" class="flex flex-col gap-4">
                    <h1 class="text-3xl lg:text-6xl poppins-bold">{!! __('Les paiements') !!}</h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les créateurs') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les agences') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-2xl poppins-bold">{!! __('Pour les entreprises') !!}</h2>
                            <p>{!! __('Pour les créateurs de contenus, nous offrons une nouvelle opportunité
                            de libérer l\'étendu de leur talent en participant aux campagnes UGC de nombreuses entreprises.') !!}</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Questions --}}
<section class="py-20">
    <h1 class="lg:text-5xl text-3xl text-center poppins-bold mb-20">{!! __('Pour toutes autres questions') !!}</h1>
    <div class="container mx-auto flex flex-col gap-5">
    <livewire:input :type="'text'" :label="'* Nom'" :name="'nom'">
    <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'phone'">
    <livewire:input :type="'mail'" :label="'* Mail'" :name="'mail'">
    <livewire:input :type="'text'" :label="'Votre entreprise'" :name="'work'">
    <livewire:input :type="'text'" :label="'* Objet'" :name="'link'">  
    <livewire:textarea :text="'* Votre question'" :rows="'3'" />
    <livewire:button-form :text="'Soumettre'" :color="'bg-blue-800'" />
    </div>
</section>

@endsection