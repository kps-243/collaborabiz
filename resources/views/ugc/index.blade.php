@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'L\'UGC ?'" />
<section class="py-14">
    <x-info>
        <x-slot name="nav">
            <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'authenticite' }" @click="activeSection = 'authenticite'; activeLi = 'authenticite'">
                <a href="#authenticite">{!! __('L\'authenticité') !!}</a>
            </li>
            <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'engagement' }" @click="activeSection = 'engagement'; activeLi = 'engagement'">
                <a href="#engagement">{!! __('L\'engagement') !!}</a>
            </li>
            <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'les-avantages' }" @click="activeSection = 'les-avantages'; activeLi = 'les-avantages'">
                <a href="#les-avantages">{!! __('Les avantages d\'une stratégie UGC') !!}</a>
            </li>
            <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'les-types' }" @click="activeSection = 'les-types'; activeLi = 'les-types'">
                <a href="#les-types">{!! __('Les types de contenus UGC') !!}</a>
            </li>
            <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'les-points' }" @click="activeSection = 'les-points'; activeLi = 'les-points'">
                <a href="#les-points">{!! __('Les points clés à retenir pour une statégie UGC réussie') !!}</a>
            </li>
            <li class="pl-2 transition-all" :class="{ 'border-l-2 border-blue-700 ml-2' : activeLi === 'les-endroits' }" @click="activeSection = 'les-endroits'; activeLi = 'les-endroits'">
                <a href="#les-endroits">{!! __('Les endroits où utiliser l\'UGC') !!}</a>
            </li>
        </x-slot>
        <x-slot name="content">
            <div id="authenticite" class="flex flex-col gap-4">
                <livewire:title-info :text="'L\'authenticité'"/>
                <ul class="container mx-auto flex flex-col gap-3 list-inside list-disc">
                    <li>{!! __('80% des consomateurs trouvent que l\'UGC a plus d\'impact que le contenu créé par la marque.') !!}</li>
                    <li>{!! __('Plus de 60% affirment que leur famille et leurs amis ont un rôle décisif au moment de l\'achat.') !!}</li>
                    <li>{!! __('Selon une autre étude, les marques de tous les secteurs indiquent que les taux de conversion ont
                    augmenté à partir du moment où elles ont intégré l\'UGC dans leur statégie marketing.') !!}</li>
                    <li>{!! __('Le marketing d\'influence étant plus sofistiqué, les consommateurs prennent petit à petit conscience 
                    des questions liées à l\'authenticité.') !!}</li>
                    <li>{!! __('Pour assurer l\'authenticité de votre marque envers ses clients, l\'UGC doit obligatoirement être 
                    intégré à votre stratégie de marketing d\'influence.') !!}</li>
                </ul>
            </div>
            <div id="engagement" class="flex flex-col gap-4">
                <livewire:title-info :text="'L\'engagement'"/>
                <ul class="container mx-auto flex flex-col gap-3 list-inside list-disc">
                    <li>{!! __('80% des consomateurs trouvent que l\'UGC a plus d\'impact que le contenu créé par la marque.') !!}</li>
                    <li>{!! __('Plus de 60% affirment que leur famille et leurs amis ont un rôle décisif au moment de l\'achat.') !!}</li>
                    <li>{!! __('Selon une autre étude, les marques de tous les secteurs indiquent que les taux de conversion ont
                    augmenté à partir du moment où elles ont intégré l\'UGC dans leur statégie marketing.') !!}</li>
                    <li>{!! __('Le marketing d\'influence étant plus sofistiqué, les consommateurs prennent petit à petit conscience 
                    des questions liées à l\'authenticité.') !!}</li>
                    <li>{!! __('Pour assurer l\'authenticité de votre marque envers ses clients, l\'UGC doit obligatoirement être 
                    intégré à votre stratégie de marketing d\'influence.') !!}</li>
                </ul>
            </div>
            <div id="les-avantages" class="flex flex-col gap-4">
                <livewire:title-info :text="'Les avantages d\'une stratégie UGC'"/>
                <ul class="container mx-auto flex flex-col gap-3 list-inside list-disc">
                    <li>{!! __('80% des consomateurs trouvent que l\'UGC a plus d\'impact que le contenu créé par la marque.') !!}</li>
                    <li>{!! __('Plus de 60% affirment que leur famille et leurs amis ont un rôle décisif au moment de l\'achat.') !!}</li>
                    <li>{!! __('Selon une autre étude, les marques de tous les secteurs indiquent que les taux de conversion ont
                    augmenté à partir du moment où elles ont intégré l\'UGC dans leur statégie marketing.') !!}</li>
                    <li>{!! __('Le marketing d\'influence étant plus sofistiqué, les consommateurs prennent petit à petit conscience 
                    des questions liées à l\'authenticité.') !!}</li>
                    <li>{!! __('Pour assurer l\'authenticité de votre marque envers ses clients, l\'UGC doit obligatoirement être 
                    intégré à votre stratégie de marketing d\'influence.') !!}</li>
                </ul>
            </div>
            <div id="les-types" class="flex flex-col gap-4">
                <livewire:title-info :text="'Les types de contenu UGC'"/>
                <ul class="container mx-auto flex flex-col gap-3 list-inside list-disc">
                    <li>{!! __('80% des consomateurs trouvent que l\'UGC a plus d\'impact que le contenu créé par la marque.') !!}</li>
                    <li>{!! __('Plus de 60% affirment que leur famille et leurs amis ont un rôle décisif au moment de l\'achat.') !!}</li>
                    <li>{!! __('Selon une autre étude, les marques de tous les secteurs indiquent que les taux de conversion ont
                    augmenté à partir du moment où elles ont intégré l\'UGC dans leur statégie marketing.') !!}</li>
                    <li>{!! __('Le marketing d\'influence étant plus sofistiqué, les consommateurs prennent petit à petit conscience 
                    des questions liées à l\'authenticité.') !!}</li>
                    <li>{!! __('Pour assurer l\'authenticité de votre marque envers ses clients, l\'UGC doit obligatoirement être 
                    intégré à votre stratégie de marketing d\'influence.') !!}</li>
                </ul>
            </div>
            <div id="les-points" class="flex flex-col gap-4">
                <livewire:title-info :text="'Les points clés à retenir pour une statégie UGC réussie'"/>
                <ul class="container mx-auto flex flex-col gap-3 list-inside list-disc">
                    <li>{!! __('80% des consomateurs trouvent que l\'UGC a plus d\'impact que le contenu créé par la marque.') !!}</li>
                    <li>{!! __('Plus de 60% affirment que leur famille et leurs amis ont un rôle décisif au moment de l\'achat.') !!}</li>
                    <li>{!! __('Selon une autre étude, les marques de tous les secteurs indiquent que les taux de conversion ont
                    augmenté à partir du moment où elles ont intégré l\'UGC dans leur statégie marketing.') !!}</li>
                    <li>{!! __('Le marketing d\'influence étant plus sofistiqué, les consommateurs prennent petit à petit conscience 
                    des questions liées à l\'authenticité.') !!}</li>
                    <li>{!! __('Pour assurer l\'authenticité de votre marque envers ses clients, l\'UGC doit obligatoirement être 
                    intégré à votre stratégie de marketing d\'influence.') !!}</li>
                </ul>
            </div>
            <div id="les-endroits" class="flex flex-col gap-4">
                <livewire:title-info :text="'Les endroits où utiliser l\'UGC'"/>
                <ul class="container mx-auto flex flex-col gap-3 list-inside list-disc">
                    <li>{!! __('80% des consomateurs trouvent que l\'UGC a plus d\'impact que le contenu créé par la marque.') !!}</li>
                    <li>{!! __('Plus de 60% affirment que leur famille et leurs amis ont un rôle décisif au moment de l\'achat.') !!}</li>
                    <li>{!! __('Selon une autre étude, les marques de tous les secteurs indiquent que les taux de conversion ont
                    augmenté à partir du moment où elles ont intégré l\'UGC dans leur statégie marketing.') !!}</li>
                    <li>{!! __('Le marketing d\'influence étant plus sofistiqué, les consommateurs prennent petit à petit conscience 
                    des questions liées à l\'authenticité.') !!}</li>
                    <li>{!! __('Pour assurer l\'authenticité de votre marque envers ses clients, l\'UGC doit obligatoirement être 
                    intégré à votre stratégie de marketing d\'influence.') !!}</li>
                </ul>
            </div>
        </x-slot>
    </x-info>
</section>
<section class="mt-10 w-full bg-blue-100">
    <livewire:interest-section :title="'Vous souhaitez vous lancez dans l\'UCG ?'" :text="'Crée un compte'" :color="'bg-blue-700'" link="/presentation"/>
</section>
@endsection