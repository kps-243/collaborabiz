@extends('layouts.admin')

    @section('header')
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ugc') }}
            </h2>
            <a href="{{ route('ugcs.create') }}" class="py-2 px-4 bg-blue-500 text-white rounded-lg">{{ __('Create') }}</a>
        </div>
    @endsection
    @section('content')
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                {{-- <form id="team-form" class="flex gap-4 mb-4 w-fit items-center" method="GET" action="{{ route('teams.index') }}">
                    <input type="text" name="team-search" id="team-search" value="@if(isset($filter["team-search"])){{ $filter["team-search"] }}@endif">
                    <button type="submit" class="create">{{ __('Filter') }}</button>
                </form> --}}
                <div>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">{{ __('Title') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Text') }}</th>
                                <th scope="col" class="px-6 py-4 text-right">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ugcs as $item)
                                <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-gray-300 w-full">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->title }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->text }}</td>

                                    <td class="whitespace-nowrap px-6 py-4 flex justify-end gap-2 items-center">
                                        <a href={{ route('ugcs.edit', $item->id) }} class="p-2 bg-slate-950 text-white rounded-lg">{{ __('Edit') }}</a>
                                        <a class="delete cursor-pointer" href={{ route('ugcs.destroy', $item->id) }} onclick="return confirm('Are you sure?')">
                                            <img src="{{ asset('img/trash.svg') }}" class="w-5" alt="Trash">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection
