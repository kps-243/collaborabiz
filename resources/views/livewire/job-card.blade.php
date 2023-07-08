<div class="flex items-center gap-7 w-full job">
    <div class="w-1/2 h-full">
        <img src="/img/produit.jpg" alt="Collaborabiz - Produit" class="object-cover w-full h-[500px]">
    </div>
    <div class="flex flex-col gap-2 w-1/2">
        <livewire:title-info :text="$title" />
        <p>{!! __('Description du produit') !!}</p>
        <livewire:button :color="'bg-blue-700'" :text="'Découvrir'" :link="'/job/de'" >
    </div>
</div>
