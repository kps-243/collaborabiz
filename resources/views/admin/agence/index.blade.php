<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Entreprise') }}
            </h2>
            <a href="{{ route('entreprises.create') }}" class="py-2 px-4 bg-blue-500 text-white rounded-lg">{{ __('Create') }}</a>
        </div>
    </x-slot>
    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($entreprises as $item)
                    <tr class="border-b transition duration-300 ease-in-out hover:bg-gray-300 w-full">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->id }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $item->name }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $item->email }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $item->phone }}</td>
                        <td class="whitespace-nowrap px-6 py-4 flex justify-end gap-2 items-center">
                            <a href={{ route('entreprises.edit', $item->id) }} class="p-2 bg-slate-950 text-white rounded-lg">{{ __('Edit') }}</a>
                            <a class="delete cursor-pointer" href={{ route('entreprises.destroy', $item->id) }} onclick="return confirm('Are you sure?')">
                                <img src="{{ asset('img/trash.svg') }}" class="w-5" alt="Trash">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
    <x-slot name="footer">
    </x-slot>
</x-app-layout>