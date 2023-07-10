<div>
    <div class="container flex flex-col px-10 rounded-lg gap-5">
        <div class="flex">
            <img src="/img/{{$img}}.svg" alt="Icon - Type de compte" class="w-20 h-20">
        </div>
        <h2 class="poppins-extrabold text-3xl">{!!__($title) !!}</h2>
        <p>{!!__($text) !!}</p>
        <livewire:button :text="$title" :link="$link" :color="'bg-blue-700'"/>
    </div>
</div>
