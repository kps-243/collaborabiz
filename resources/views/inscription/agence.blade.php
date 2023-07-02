@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Agence'" />
<div class="container mx-auto w-full flex flex-col gap-5"> 
    <div class="flex items-center justify-center">
        <h1 class="py-6 text-2xl poppins-bold">{!! __('Agent') !!}</h1>
    </div>
    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
    <livewire:input :type="'text'" :label="'Prénom'" :name="'prenom'">
    <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'phone'">
    <livewire:input :type="'mail'" :label="'Mail'" :name="'mail'">
    <livewire:input :type="'password'" :label="'Mot de passe'" :name="'password'">  
    <div class="flex items-center justify-center">
        <h1 class="py-6 text-2xl poppins-bold">{!! __('Agence') !!}</h1>
    </div>
    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
    <livewire:input :type="'number'" :label="'Siret'" :name="'siret'">
</div>

@endsection