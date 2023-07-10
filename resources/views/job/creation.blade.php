@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Ajouter un Job'" />
<section class="container mx-auto py-24 flex flex-col justify-center items-center gap-5">
    <livewire:input :type="'text'" :label="'* Titre'" :name="'title'">
    <livewire:select :name="'type'" :label="'* Type'" />
    <livewire:input :type="'date'" :label="'* Date de fin'" :name="'date'">
    <livewire:input :type="'text'" :label="'Votre entreprise'" :name="'work'">
    <livewire:input :type="'url'" :label="'* Lien de site ou de l\'application'" :name="'link'">  
    <livewire:textarea :text="'* Description / Brief'" :rows="'3'" />
    <livewire:button-form :text="'Ajouter'" :color="'bg-blue-800'" />
</section>

@endsection