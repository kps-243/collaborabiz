@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Agence'" />
<div class="container mx-auto w-full flex flex-col gap-5"> 
    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
    <livewire:input :type="'text'" :label="'Prénom'" :name="'prenom'">
</div>

@endsection