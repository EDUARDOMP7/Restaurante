@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Reservation
@endsection

@section('content')
    <section class="content container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-100 border-b px-4 py-3">
                        <span class="text-lg font-semibold">{{ __('Create') }} Reservation</span>
                    </div>
                    <div class="px-6 py-4">
                        <form method="POST" action="{{ route('reservation.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('reservation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
