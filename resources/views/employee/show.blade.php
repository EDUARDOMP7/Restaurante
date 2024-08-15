@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-gray-800 p-4 flex justify-between items-center">
                <h2 class="text-white text-lg font-semibold">
                    {{ __('Show') }} Employee
                </h2>
                <a href="{{ route('employee.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    {{ __('Back') }}
                </a>
            </div>

            <div class="p-6">
                <div class="mb-4">
                    <strong class="block text-sm font-medium text-gray-700">Name:</strong>
                    <p class="mt-1 text-gray-900">{{ $employee->name }}</p>
                </div>
                <div class="mb-4">
                    <strong class="block text-sm font-medium text-gray-700">Position:</strong>
                    <p class="mt-1 text-gray-900">{{ $employee->position }}</p>
                </div>
                <div class="mb-4">
                    <strong class="block text-sm font-medium text-gray-700">Hire Date:</strong>
                    <p class="mt-1 text-gray-900">{{ $employee->hire_date }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
