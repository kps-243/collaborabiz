@extends('layouts.app')
@section('content')

<livewire:hero-section :text="'Tarifs'" />

<section class="py-16">
    <div class="container mx-auto">
        <livewire:tarif />
    </div>
</section>

@endsection