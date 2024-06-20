@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Order
@endsection

@section('content')
    <section class="content container mx-auto p-4">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white p-4">
                        <h2 class="text-lg font-semibold">{{ __('Update') }} Order</h2>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('orders.update', $order->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('order.form')

                            <div class="mt-4">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
