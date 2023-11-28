<x-app-layout>
    <x-slot name="header">
        <div class="w-2/5">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('Update createur') }}</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Update ') }} {{ $createur->nom }} {{ $createur->prenom }}
                    </p>
                </div>
            </div>
        </div>
    </x-slot>
    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-center">
                    <div class="w-3/4 p-5 shadow-lg rounded-lg">
                        <form action="{{ route('createurs.update', $createur->id) }}" method="POST">
                            @csrf
                            <div class="flex flex-col gap-5">
                                <div>
                                    <x-label for="nom" value="{{ __('Nom') }}" />
                                    <input id="nom" name="nom" type="text" value="{{ $createur->nom }}"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="nom" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="prenom" value="{{ __('Prenom') }}" />
                                    <input id="prenom" name="prenom" type="text" value="{{ $createur->prenom }}"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="prenom" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="date_naissance" value="{{ __('Date of Creation') }}" />
                                    <input id="date_naissance" name="date_naissance"
                                        value="{{ $createur->date_naissance }}" type="date"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="date_naissance" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <input id="email" name="email" value="{{ $createur->email }}" type="email"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="email" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="password" value="{{ __('Password') }}" />
                                    <input id="password" name="password" value="{{ $createur->password }}" type="password"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="password" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="telephone" value="{{ __('telephone') }}" />
                                    <input id="telephone" name="telephone" value="{{ $createur->telephone }}"
                                        type="number" class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="telephone" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="portfolio" value="{{ __('portfolio') }}" />
                                    <input id="portfolio" name="portfolio" value="{{ $createur->portfolio }}"
                                        type="link" class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="portfolio" class="mt-2" />
                                </div>
                                <button type="submit" class="bg-blue-500 text-white py-2">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
        <x-slot name="footer">
        </x-slot>
</x-app-layout>
