<section class="py-2 w-full">
    <div class="container mx-auto w-full flex gap-12">
        <aside class="sticky top-20 h-full flex flex-col justify-start w-3/12">
            <ul class="flex flex-col gap-3 text-lg" x-data="{ activeSection: '', activeLi: '' }">
                {{ $nav }}
            </ul>
        </aside>
        <div class="container mx-auto w-9/12">
            <div class="flex flex-col gap-12">
                {{ $content }}
            </div>
        </div>
    </div>
</section>