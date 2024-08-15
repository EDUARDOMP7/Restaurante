@extends('layouts.app')

@section('template_title')
    {{ $payment->name ?? "{{ __('Show') Payment" }}
@endsection

@section('content')
    <section class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full max-w-lg">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 p-4 flex justify-between items-center">
                        <h2 class="text-white text-lg font-semibold">
                            {{ __('Show') }} Payment
                        </h2>
                        <a class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700"
                            href="{{ route('payment.index') }}">
                            {{ __('Back') }}
                        </a>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <strong class="block text-gray-700">Client Id:</strong>
                            <p class="text-gray-900">{{ $payment->client_id }}</p>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Total Amount:</strong>
                            <p class="text-gray-900">{{ $payment->total_amount }}</p>
                        </div>
                        <div class="mb-4">
                            <strong class="block text-gray-700">Payment Method:</strong>
                            <p class="text-gray-900">{{ $payment->payment_method }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
