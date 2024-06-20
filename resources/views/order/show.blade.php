@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? __('Show Order') }}
@endsection

@section('content')
    <section class="content container mx-auto p-4">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white p-4 flex justify-between items-center">
                        <span class="text-lg font-semibold">{{ __('Show') }} Order</span>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            href="{{ route('orders.index') }}">
                            {{ __('Back') }}
                        </a>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <strong class="block text-gray-700">Date Time:</strong>
                            <span class="text-gray-900">{{ $order->date_time }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Precio:</strong>
                            <span class="text-gray-900">{{ $order->precio }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Client Id:</strong>
                            <span class="text-gray-900">{{ $order->client_id }}</span>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Table Id:</strong>
                            <span class="text-gray-900">{{ $order->table_id }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
