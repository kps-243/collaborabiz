<x-app-layout>
@section('content')

<livewire:hero-section :text="'Agence'" />
<section class="container mx-auto w-full flex flex-col items-center justify-center gap-5"> 
    <h2 class="py-6 text-2xl poppins-bold">{!! __('Agent') !!}</h1>
    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
    <livewire:input :type="'text'" :label="'Prénom'" :name="'prenom'">
    <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'phone'">
    <livewire:input :type="'mail'" :label="'Mail'" :name="'mail'">
    <livewire:input :type="'password'" :label="'Mot de passe'" :name="'password'">  
    <h2 class="py-6 text-2xl poppins-bold">{!! __('Agence') !!}</h1>
    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
    <livewire:input :type="'url'" :label="'Lien de l\'agence'" :name="'link'">
    <livewire:input :type="'number'" :label="'Siret'" :name="'siret'">
    <div class="flex gap-4 w-full">
        <label class="w-2/12"></label>
        <div class="w-10/12 py-10">
            <livewire:button :text="'Créer'" :color="'bg-blue-800'" />
        </div>
    </div>
</section>

@endsection
</x-app-layout>