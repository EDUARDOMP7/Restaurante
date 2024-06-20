@extends('layouts.app')

@section('template_title')
    {{ $table->name ?? __('Show Table') }}
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-gray-800 text-white p-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{ __('Show Table') }}</h2>
                    <a href="{{ route('tables.index') }}" class="btn btn-primary">
                        {{ __('Back') }}
                    </a>
                </div>
            </div>

            <div class="p-6">
                <div class="overflow-hidden">
                    <div class="py-4">
                        <strong class="block mb-2">{{ __('Capacity') }}:</strong>
                        <p class="text-lg">{{ $table->capacity }}</p>
                    </div>
                    <div class="py-4">
                        <strong class="block mb-2">{{ __('Status') }}:</strong>
                        <p class="text-lg">{{ $table->status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
