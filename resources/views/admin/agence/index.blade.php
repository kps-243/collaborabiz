<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Agence') }}
            </h2>
            <a href="{{ route('agence.create') }}"
                class="py-2 px-4 bg-blue-500 text-white rounded-lg">{{ __('Create') }}</a>
        </div>
    </x-slot>
    @section('content')
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">ID</th>
                                <th scope="col" class="px-6 py-4">Nom de l'agence</th>
                                <th scope="col" class="px-6 py-4">Lien</th>
                                <th scope="col" class="px-6 py-4">Siret</th>
                                <th scope="col" class="px-6 py-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($agence as $item)
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-gray-300 w-full">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->nom_agence }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->lien_agence }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->siret_agence }}</td>

                                    <td class="whitespace-nowrap px-6 py-4 flex justify-end gap-2 items-center">
                                        <a href={{ route('agence.edit', $item->id) }}
                                            class="p-2 bg-slate-950 text-white rounded-lg">{{ __('Edit') }}</a>
                                        <a class="delete cursor-pointer" href={{ route('agence.destroy', $item->id) }}
                                            onclick="return confirm('Are you sure?')">
                                            <img src="{{ asset('img/trash.svg') }}" class="w-5" alt="Trash">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    {{-- {{ $createurs->links() }} --}}
                </div>
            </div>
        </div>
    @endsection
    <x-slot name="footer">
    </x-slot>
</x-app-layout>
