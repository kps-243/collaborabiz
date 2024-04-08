{{-- <x-app-layout>
    <x-slot name="header">
        <div class="w-2/5">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('Create Agence') }}</h3>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Create a new Agence') }}
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
                        <form action="{{ route('agence.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col gap-5">
                                <div>
                                    <x-label for="nom" value="{{ __('nom') }}" />
                                    <input id="nom" name="nom" type="text"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="nom" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="prenom" value="{{ __('prenom') }}" />
                                    <input id="prenom" name="prenom" type="text"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="prenom" class="mt-2" />
                                </div>

                                <div>
                                    <x-label for="email" value="{{ __('email') }}" />
                                    <input id="email" name="email" type="email"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="email" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="password" value="{{ __('password') }}" />
                                    <input id="password" name="password" type="password"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="password" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="telephone" value="{{ __('telephone') }}" />
                                    <input id="telephone" name="telephone" type="number"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="telephone" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="nom_agence" value="{{ __('nom_agence') }}" />
                                    <input id="nom_agence" name="nom_agence" type="text"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="nom_agence" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="lien_agence" value="{{ __('lien_agence') }}" />
                                    <input id="lien_agence" name="lien_agence" type="link"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="lien_agence" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="siret_agence" value="{{ __('siret_agence') }}" />
                                    <input id="siret_agence" name="siret_agence" type="text"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="siret_agence" class="mt-2" />
                                </div>
                                <button type="submit" class="bg-blue-500 text-white py-2">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <x-slot name="footer">
    </x-slot>
</x-app-layout> --}}
