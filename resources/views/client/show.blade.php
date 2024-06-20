@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? "{{ __('Show') Client" }}
@endsection

@section('content')
    <section class="content container mx-auto px-4">
        <div class="flex flex-col">
            <div class="w-full mb-4">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-800 text-white py-4 px-6 rounded-t-lg flex justify-between items-center">
                        <h3 class="text-lg font-semibold">{{ __('Show') }} Client</h3>
                        <a href="{{ route('clients.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Back') }}
                        </a>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <strong>{{ __('Name') }}:</strong>
                            <span>{{ $client->name }}</span>
                        </div>
                        <div class="mb-4">
                            <strong>{{ __('Email') }}:</strong>
                            <span>{{ $client->email }}</span>
                        </div>
                        <div class="mb-4">
                            <strong>{{ __('Telefono') }}:</strong>
                            <span>{{ $client->telefono }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
