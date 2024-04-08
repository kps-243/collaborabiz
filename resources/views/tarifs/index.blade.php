<x-app-layout>
@section('content')

<livewire:hero-section :text="'Tarifs'" />

<section class="py-16">
    <div class="container mx-auto flex justify-center items-center">
        <livewire:tarif />
    </div>
</section>

@endsection
</x-app-layout>