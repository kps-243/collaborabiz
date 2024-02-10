<x-app-layout>
@section('content')

<section class="py-16">
    <div class="container mx-auto flex flex-col text-center w-full gap-7">
        <div class="flex flex-col items-center gap-7 w-full job">
            <livewire:title-info :text="$job->titre" />
            <div class="w-3/5">
                <img src="{!! __(isset($job->getMedia('job-image')[0]) ? $job->getMedia('job-image')[0]->getUrl() : '') !!}" alt="Collaborabiz - Produit" class="object-cover w-full h-[400px]">
            </div>
            
            <div class="flex flex-col gap-2">
                <p>{!! __($job->description) !!}</p>
                <a class="hover:text-red-600" href="{{$job->liens}}">{{$job->liens}}</a>
            </div>
        </div>
</section>

@endsection
</x-app-layout>