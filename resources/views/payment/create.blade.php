@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Payment
@endsection

@section('content')
    <section class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full max-w-lg">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 p-4">
                        <h2 class="text-white text-lg font-semibold">{{ __('Create') }} Payment</h2>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('payment.store') }}" role="form" enctype="multipart/form-data"
                            class="space-y-4">
                            @csrf

                            @include('payment.form')

                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
