@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Table
@endsection

@section('content')
    <section class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white p-4">
                        <span class="text-lg font-semibold">{{ __('Create') }} Table</span>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('table.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('table.form')

                            <div class="mt-4">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
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
