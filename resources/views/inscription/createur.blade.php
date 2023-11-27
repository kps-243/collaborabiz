<x-app-layout>
    @section('content')
        <livewire:hero-section :text="'Créateur'" />
        <div class="container mx-auto w-full flex flex-col gap-5">
            <form action="{{ route('createurs.store') }}" method="POST">
                @csrf
                <div class="flex items-center justify-center">
                    <h1 class="py-6 text-2xl poppins-bold">{!! __('Créateur') !!}</h1>
                </div>




                <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
                    <livewire:input :type="'text'" :label="'Prénom'" :name="'prenom'">
                        <livewire:input :type="'tel'" :label="'Numéro de téléphone'" :name="'telephone'">
                            <livewire:input :type="'email'" :label="'Mail'" :name="'email'">
                                <livewire:input :type="'password'" :label="'Mot de passe'" :name="'password'">
                                    <livewire:input :type="'date'" :label="'Date de naissance'" :name="'date_naissance'">
                                        <livewire:input :type="'url'" :label="'Lien Portfolio'" :name="'portfolio'">


                                            <livewire:button-form :text="'Créer'" :color="'bg-blue-800'" />
            </form>
        </div>
    @endsection
</x-app-layout>
