@extends('layouts.app')

@section('template_title')
    {{ $reservation->name ?? "{{ __('Show') }} Reservation" }}
@endsection

@section('content')
    <section class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg">
            <div class="flex justify-between items-center bg-gray-100 p-4 border-b">
                <span class="text-lg font-semibold">{{ __('Show') }} Reservation</span>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('reservation.index') }}">
                    {{ __('Back') }}
                </a>
            </div>

            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center">
                        <strong class="w-1/3 text-gray-700">{{ __('Date Time:') }}</strong>
                        <span class="w-2/3 text-gray-900">{{ $reservation->date_time }}</span>
                    </div>
                    <div class="flex items-center">
                        <strong class="w-1/3 text-gray-700">{{ __('Client Id:') }}</strong>
                        <span class="w-2/3 text-gray-900">{{ $reservation->client_id }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
