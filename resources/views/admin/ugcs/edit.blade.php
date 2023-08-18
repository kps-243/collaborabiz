@extends('layouts.admin')
    <div> 
        <div class="sm:px-6 lg:px-8 flex justify-between">
            @section('header')
            <div class="w-2/5">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Update Ugc') }}</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Update ') }} {{ $ugc->title }}
                        </p>
                    </div>
                </div>
            </div>
            @endsection
            @section('content')
            <div class="w-3/4 p-5 shadow-lg rounded-lg">
                <form action="{{ route('ugcs.update', $ugc->id) }}" method="POST">
                    @csrf
                    <div class="flex flex-col gap-5">
                       
                        <div class="flex gap-5">
                            <div class="w-1/2">
                                <x-label for="title" value="{{ __('title') }}" />
                                <input id="title" name="title" type="text" value="{{ $ugc->title }}" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="title" class="mt-2" />
                            </div>
                            <div class="w-1/2">
                                <x-label for="text" value="{{ __('Text') }}" />
                                <input id="text" name="text" value="{{ $ugc->text }}" type="text" class="px-2 py-1 mt-1 block w-full border" />
                                <x-input-error for="text" class="mt-2" />
                            </div> 
                        </div>
                        <button type="submit" class="bg-blue-500 text-white py-2 w-1/2">
                            {{ __('Save') }}
                        </button>
                    </div>
                </form>
            @endsection       
        </div>
    </div>
