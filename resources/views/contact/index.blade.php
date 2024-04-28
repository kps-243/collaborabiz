<x-app-layout>
@section('content')
<livewire:hero-section :text="'Contactez-nous'" />
 <section class="py-20 container mx-auto flex justify-center items-center w-full px-4">
    <p class="text-xl">{!! __('Contactez-nous pour tout ce qui concerne notre entreprise ou nos services. <br>
        Nous ferons notre mieux pour vous répondre.') !!}
    </p>
 </section>
 <form method="POST" action="{{ route('contact.sendMail') }}" class="container mx-auto w-full flex flex-col gap-5 px-4">
  @csrf
   <livewire:input :type="'text'" :label="'* Nom'" :name="'nom'">
   <livewire:input :type="'text'" :label="'Numéro de téléphone'" :name="'phone'">
   <livewire:input :type="'mail'" :label="'* Mail'" :name="'mail'">
   <livewire:input :type="'text'" :label="'Votre entreprise'" :name="'work'">
   <livewire:input :type="'text'" :label="'* Objet'" :name="'link'">  
   <livewire:textarea :text="'* Votre question'" :rows="'3'" :name="'question'">
   <livewire:button-form :text="'Soumettre'" :color="'bg-blue-800'" />
</form>

@endsection
</x-app-layout>