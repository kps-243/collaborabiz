@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Entreprise'" />
<div class="container mx-auto w-full flex flex-col gap-5"> 
    <div class="flex items-center justify-center">
        <h1 class="py-6 text-2xl poppins-bold">{!! __('Entreprise') !!}</h1>
    </div>
    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
    <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'phone'">
    <livewire:input :type="'mail'" :label="'Mail'" :name="'mail'">
    <livewire:input :type="'password'" :label="'Mot de passe'" :name="'password'"> 
    <livewire:input :type="'number'" :label="'Siret'" :name="'siret'"> 
    <livewire:input :type="'date'" :label="'Date de création'" :name="'date'">
    <livewire:input :type="'url'" :label="'Lien'" :name="'link'">  
    <livewire:button-form :text="'Créer'" />
</div>
@endsection