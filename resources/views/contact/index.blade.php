<x-app-layout>
@section('content')
<livewire:hero-section :text="'Contactez-nous'" />
 <section class="py-20 container mx-auto flex justify-center items-center w-full">
    <p class="text-xl">{!! __('Contactez-nous pour tout ce qui concerne notre entreprise ou nos services. <br>
        Nous ferons notre mieux pour vous répondre.') !!}
    </p>
 </section>
 {{-- <form action="{{ route('contact.send') }}" class="container mx-auto w-full flex flex-col gap-5">
   <livewire:input :type="'text'" :label="'* Nom'" :name="'nom'" :id="'nom'">
   <livewire:input :type="'phone'" :label="'Numéro de téléphone'" :name="'phone'" :id="'phone'">
   <livewire:input :type="'mail'" :label="'* Mail'" :name="'mail'" :id="'mail'">
   <livewire:input :type="'text'" :label="'Votre entreprise'" :name="'work'" :id="'work'">
   <livewire:input :type="'text'" :label="'* Objet'" :name="'link'" :id="'link'">  
   <livewire:textarea :text="'* Votre question'" :rows="'3'" :id="'question'">
   <livewire:button-form :text="'Soumettre'" :color="'bg-blue-800'" />
</form> --}}
<form method="post" action="{{route ('contact.store')}}">

   {{ csrf_field() }}

   <div class="form-group">
     <label>Sujet : *</label>
     <input type="text" class="form-control" name="sujet">
     @if ($errors->has('sujet'))
       <small class="form-text invalid-feedback">{{$errors->first('sujet')}}</small>
     @endif
   </div>

   <div class="form-group">
     <label>Email :*</label>
     <input type="email" class="form-control" name="email">
     @if ($errors->has('email'))
       <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
     @endif
   </div>


   <div class="form-group">
     <label>Description :</label>
     <textarea name="description" rows="10" cols="6" class="form-control"></textarea>
     @if ($errors->has('description'))
       <small class="form-text invalid-feedback">{{$errors->first('description')}}</small>
     @endif
   </div>

   <button class="btn btn-primary">Envoyer</button>
 </form> 


@endsection
</x-app-layout>