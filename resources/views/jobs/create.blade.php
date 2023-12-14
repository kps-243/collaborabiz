<x-app-layout>
@section('content')

<livewire:hero-section :text="'Ajouter un Job'" />
<section >
    <form action="{{ route('front.jobs.store') }}" method="POST" enctype="multipart/form-data" class="container mx-auto py-24 flex flex-col justify-center items-center gap-5">
        @csrf
        <livewire:input :type="'text'" :label="'* Titre'" :name="'titre'">
        <livewire:select :name="'type'" :label="'* Type'" :name="'type'"/>
        <livewire:input :type="'date'" :label="'* Date de fin'" :name="'delais'">
        <livewire:input :type="'text'" :label="'* Durée de la collabz'" :name="'duree_collabz'">
        <livewire:input :type="'url'" :label="'* Lien de site ou de l\'application'" :name="'liens'">  
        <livewire:textarea :text="'* Description / Brief'" :rows="'3'" :name="'description'" />
        <div class="cursor-pointer flex justify-center w-full gap-4">
            <div class="w-2/12">* Image</div>
            <label for="image" class="w-10/12">
                <input name="image" id="image" accept="image/*" type="file"
                    class="absolute mt-1 opacity-0">
                <button
                    class="block w-fit text-sm py-2 px-10 rounded-md border bg-white">
                    Sélectionner l'image du job
                </button>
                <img id="imagePreview1" src="#" alt=""
                    class=" w-14 h-14 object-cover my-4 hidden">
            </label>
        </div>
        <livewire:textarea :text="'* Contraintes de la collabz'" :rows="'3'" :name="'contraintes'" />
        <livewire:button-form :type="'submit'" :text="'Créer'" :color="'bg-blue-800'" />
    </form>
</section>

@endsection
</x-app-layout>
<script>
    let image = document.getElementById('image')

    image.addEventListener('change', function(event) {
        // Appelez la fonction previewImage avec le paramètre 'id'
        previewImage(event, 'imagePreview1');
    });

    function previewImage(event, id) {
        console.log('ok', event, id);
        var input = event.target;
        var imagePreview = document.getElementById(id);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.style.display = 'block';
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            imagePreview.style.display = 'none';
        }
    }
</script>