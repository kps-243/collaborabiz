@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Jobs'" />

{{-- Search section --}}
<section class="py-24 w-full">
    <div class="container mx-auto">
        <div class="flex flex-col gap-3 items-center justify-center">
            <div class="flex flex-col justify-center items-start gap-3">
                <livewire:title-info :text="'Rechercher des jobs'" />
                <p>{!! __('Vous obtiendrez des résultats plus adaptés') !!}</p>
                <div class="relative flex justify-center items-center w-full gap-4">
                    <input id="searchbar" onkeyup="search_job()" type="search" name="search" class="h-full w-full required:border-black-100 py-2 px-3 rounded border border-gray-300 focus:ring-0 focus:ring-offset-0 focus:border-blue-700">
                    <div class="absolute right-0 bg-blue-800 h-full flex items-center justify-center px-2">
                        <img src="/img/search.svg" alt="Collaborabiz - Icon Search" class="object-contain w-8 h-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Produict section --}}
<section class="pb-16">
    <div class="container mx-auto flex flex-col items-center justify-center w-full h-fit gap-7">
        <livewire:job-card :title="'Produit 1'"/>
        <livewire:job-card :title="'Produit 2'"/>
        <livewire:job-card :title="'Produit 3'"/>
    </div>
</section>

<script>
    function search_job() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('job');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="flex";                 
        }
    }
}
</script>
@endsection