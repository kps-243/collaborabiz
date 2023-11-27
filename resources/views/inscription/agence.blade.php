<x-app-layout>
    @section('content')
        <livewire:hero-section :text="'Agence'" />
        <form action="{{ route('agence.store') }}" method="POST">
            <section class="container mx-auto w-full flex flex-col items-center justify-center gap-5">
                <h2 class="py-6 text-2xl poppins-bold">{!! __('Agent') !!}</h1>
                    @csrf
                    <livewire:input :type="'text'" :label="'Nom'" :name="'nom'">
                        <livewire:input :type="'text'" :label="'Prénom'" :name="'prenom'">
                            <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'telephone'">
                                <livewire:input :type="'mail'" :label="'Mail'" :name="'email'">
                                    <livewire:input :type="'password'" :label="'Mot de passe'" :name="'password'">
                                        <h2 class="py-6 text-2xl poppins-bold">{!! __('Agence') !!}</h1>
                                            <livewire:input :type="'text'" :label="'Nom'" :name="'nom_agence'">
                                                <livewire:input :type="'url'" :label="'Lien de l\'agence'" :name="'lien_agence'">
                                                    <livewire:input :type="'number'" :label="'Siret'"
                                                        :name="'siret_agence'">
                                                        <div class="flex gap-4 w-full">
                                                            <label class="w-2/12"></label>
                                                            <div class="w-10/12 py-10">
                                                                <livewire:button :text="'Créer'" :color="'bg-blue-800'" />
                                                            </div>
                                                        </div>
            </section>
        </form>
    @endsection
</x-app-layout>
