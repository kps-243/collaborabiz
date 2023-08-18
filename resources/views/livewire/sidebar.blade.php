<div class="flex flex-col justify-between h-full">
    <div class="flex flex-col gap-5">
        {{-- @role('super-admin') --}}
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link href="{{ route('ugcs.index') }}" :active="request()->routeIs('ugcs.index')">
                {{ __('UGC') }}
            </x-nav-link>
        {{-- @endrole --}}
    </div>
    {{-- <div x-data="{ open: false }" class="my-5 flex gap-5">
        <div x-on:click="open = ! open" class="cursor-pointer">Langue {{ App::currentLocale() }}</div>
        <div x-show="open" class="cursor-pointer gap-5 flex flex-row">
            <a href="{{ route('language', 'fr') }}" class="">Fr</a>
            <a href="{{ route('language', 'en') }}" class="">En</a>
        </div>

    </div> --}}
</div>
