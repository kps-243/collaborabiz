<x-app-layout>
    <x-slot name="header">
        <div class="w-2/5">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('Update Job') }}</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Update ') }} {{ $job->name }}
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
        <form action="{{ route('jobs.update', $job->id) }}" method="POST">
            @csrf
            <div class="flex flex-col gap-5">
                <div>
                    <x-label for="type" value="{{ __('Type') }}" />
                    <select id="type" name="type" class="px-2 py-1 mt-1 block w-full border">
                        <option value="Service" @if($job->type === 'Service') selected @endif>Service</option>
                        <option value="Produit" @if($job->type === 'Produit') selected @endif>Produit</option>
                    </select>
                    <x-input-error for="type" class="mt-2" />
                </div>
                
                <div>
                    <x-label for="titre" value="{{ __('Titre') }}" />
                    <input id="titre" name="titre" type="text" value="{{ $job->titre }}" class="px-2 py-1 mt-1 block w-full border" />
                    <x-input-error for="titre" class="mt-2" />
                </div>
                
                <div>
                    <x-label for="description" value="{{ __('Description') }}" />
                    <textarea id="description" name="description" class="px-2 py-1 mt-1 block w-full border">{{ $job->description }}</textarea>
                    <x-input-error for="description" class="mt-2" />
                </div>
                
                <div>
                    <x-label for="delais" value="{{ __('Délais pour postuler') }}" />
                    <input id="delais" name="delais" value="{{ $job->delais }}" type="date" class="px-2 py-1 mt-1 block w-full border" />
                    <x-input-error for="delais" class="mt-2" />
                </div>
                
                <div>
                    <x-label for="duree_collabz" value="{{ __('Durée de la Collabz') }}" />
                    <input id="duree_collabz" name="duree_collabz" value="{{ $job->duree_collabz }}" type="text" class="px-2 py-1 mt-1 block w-full border" />
                    <x-input-error for="duree_collabz" class="mt-2" />
                </div>
                
                <div>
                    <x-label for="liens" value="{{ __('Liens du site ou de l’application') }}" />
                    <input id="liens" name="liens" value="{{ $job->liens }}" type="text" class="px-2 py-1 mt-1 block w-full border" />
                    <x-input-error for="liens" class="mt-2" />
                </div>
                
                <div>
                    <x-label for="contraintes" value="{{ __('Contraintes') }}" />
                    <textarea id="contraintes" name="contraintes" class="px-2 py-1 mt-1 block w-full border">{{ $job->contraintes }}</textarea>
                    <x-input-error for="contraintes" class="mt-2" />
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