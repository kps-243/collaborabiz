<section class="w-full bg-blue-100">
    <div class="py-20 lg:container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 lg:px-0 gap-8 lg:gap-0">
        <h3 class="text-3xl text-blue-800 poppins-bold text-center lg:text-left">{!!__($title) !!}</h3>
        <livewire:button :text="$text" :link="$link" :color="$color" />
    </div>
</section>