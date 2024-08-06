@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Table
@endsection

@section('content')
    <section class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white py-3 px-6 rounded-t-lg">
                        <h3 class="text-lg font-semibold">{{ __('Update') }} Table</h3>
                    </div>
                    <div class="p-6 bg-white">
                        <form method="POST" action="{{ route('table.update', $table->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('table.form')

                            <div class="mt-4">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
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
