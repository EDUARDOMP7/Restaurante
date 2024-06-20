@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Client
@endsection

@section('content')
    <section class="content container mx-auto px-4">
        <div class="flex flex-col">
            <div class="w-full">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-800 text-white py-3 px-6 rounded-t-lg">
                        <h3 class="text-lg font-semibold">{{ __('Create') }} Client</h3>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('clients.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('client.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
