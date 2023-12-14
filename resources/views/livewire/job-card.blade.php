<div class="flex items-center gap-7 w-full job">
    <div class="w-1/2 h-full">
        <img src="{!! __($image) !!}" alt="Collaborabiz - Produit" class="object-cover w-full h-[500px]">
    </div>
    <div class="flex flex-col gap-2 w-1/2">
        <h3>{!! __($type) !!}</h3>
        <livewire:title-info :text="$title" />
        <p>{!! __($describ) !!}</p>
        <p>{!! __($date) !!}</p>
        <p>{!! __($duration) !!}</p>
        <livewire:button :color="'bg-blue-700'" :text="'Découvrir'" :link="$slug" >
    </div>
</div>
