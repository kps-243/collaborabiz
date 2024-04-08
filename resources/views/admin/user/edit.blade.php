<x-app-layout>
    <x-slot name="header">
        <div class="w-2/5">
            <div class="md:col-span-1 flex justify-between">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('Update user') }}</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Update ') }} {{ $user->name }} {{ $user->firstname }}
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
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            <div class="flex flex-col gap-5">
                                <div>
                                    <x-label for="name" value="{{ __('Name') }}" />
                                    <input id="name" name="name" type="text" value="{{ $user->name }}"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="name" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="firstname" value="{{ __('Firstname') }}" />
                                    <input id="firstname" name="firstname" type="text" value="{{ $user->firstname }}"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="firstname" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <input id="email" name="email" value="{{ $user->email }}" type="email"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="email" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="password" value="{{ __('Password') }}" />
                                    <input id="password" name="password" value="{{ $user->password }}" type="password"
                                        class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="password" class="mt-2" />
                                </div>
                                <div>
                                    <x-label for="telephone" value="{{ __('telephone') }}" />
                                    <input id="telephone" name="telephone" value="{{ $user->telephone }}"
                                        type="text" class="px-2 py-1 mt-1 block w-full border" />
                                    <x-input-error for="telephone" class="mt-2" />
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
