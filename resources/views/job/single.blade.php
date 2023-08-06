@extends('layouts.app')
@section('content')

<section class="py-16">
    <div class="container mx-auto flex flex-col text-center w-full gap-7">
        <div class="flex flex-col items-center gap-7 w-full job">
            <livewire:title-info :text="'Produit 1'" />
            <div class="w-3/5">
                <img src="/img/produit.jpg" alt="Collaborabiz - Produit" class="object-cover w-full h-[400px]">
            </div>
            <div class="flex flex-col gap-2">
                <p>{!! __('Description du produit') !!}</p>
            </div>
        </div>
</section>

@endsection