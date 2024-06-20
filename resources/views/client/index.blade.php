@extends('layouts.app')

@section('template_title')
    Client
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex flex-col">
            <div class="w-full mb-4">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-800 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                        <h3 class="text-lg font-semibold">{{ __('Client') }}</h3>
                        <a href="{{ route('clients.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Create New') }}
                        </a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                            role="alert">
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
                    @endif

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="py-2 px-4">{{ __('No') }}</th>
                                        <th class="py-2 px-4">{{ __('Name') }}</th>
                                        <th class="py-2 px-4">{{ __('Email') }}</th>
                                        <th class="py-2 px-4">{{ __('Telefono') }}</th>
                                        <th class="py-2 px-4">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 px-4">{{ ++$i }}</td>
                                            <td class="py-2 px-4">{{ $client->name }}</td>
                                            <td class="py-2 px-4">{{ $client->email }}</td>
                                            <td class="py-2 px-4">{{ $client->telefono }}</td>
                                            <td class="py-2 px-4">
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                                    <a href="{{ route('clients.show', $client->id) }}"
                                                        class="text-blue-500 hover:text-blue-700 font-bold py-1 px-2 rounded">
                                                        {{ __('Show') }}
                                                    </a>
                                                    <a href="{{ route('clients.edit', $client->id) }}"
                                                        class="text-green-500 hover:text-green-700 font-bold py-1 px-2 rounded">
                                                        {{ __('Edit') }}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-red-500 hover:text-red-700 font-bold py-1 px-2 rounded">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    {!! $clients->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
