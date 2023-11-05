<x-app-layout>
    <x-slot name="header">
        <div class="w-2/5">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('Create Entreprise') }}</h3>
                
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Create a new Entreprise') }}
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
                    <form action="{{ route('entreprises.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col gap-5">
                            <div>
                                <x-label for="name" value="{{ __('Name') }}" />
                                <input id="name" name="name" type="text" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="name" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-label for="date_creation" value="{{ __('Date of Creation') }}" />
                                <input id="date_creation" name="date_creation" type="date" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="date_creation" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <input id="email" name="email" type="text" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="email" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-label for="password" value="{{ __('Password') }}" />
                                <input id="password" name="password" type="password" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="password" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-label for="phone" value="{{ __('Phone') }}" />
                                <input id="phone" name="phone" type="text" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="phone" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-label for="siret" value="{{ __('SIRET') }}" />
                                <input id="siret" name="siret" type="text" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="siret" class="mt-2" />
                            </div>
                            
                            {{-- <div>
                                <x-label for="link" value="{{ __('Link') }}" />
                                <input id="link" name="link" type="text" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="link" class="mt-2" />
                            </div> --}}
                              
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
</x-app-layout>