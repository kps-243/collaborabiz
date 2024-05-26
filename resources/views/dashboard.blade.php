<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-8">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('content')
    <div class="py-12 text-center text-2xl flex flex-col gap-2">
        <p>Le site sera bientôt disponible. Merci de votre patience.</p>
        <div class="flex flex-col justify-center items-center gap-2">
            <p>Contactez-nous pour plus d'informations.</p>
            <livewire:button :text="'Nous Contactez'" :color="'bg-blue-800'" :link="'/contact'" />
        </div>
    </div>
    
    @endsection
    <x-slot name="footer">
    </x-slot>
</x-app-layout>
