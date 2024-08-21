@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full md:w-8/12">
                <div class="bg-white shadow-lg rounded-lg">
                    <div class="p-6 bg-gray-200 border-b border-gray-300">
                        <h2 class="text-xl font-semibold text-gray-700">
                            {{ __('Inicio') }}
                        </h2>
                    </div>

                    <div class="p-6">
                        @if (session('status'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4"
                                role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p class="text-gray-900 text-lg">
                            {{ __('¡Has iniciado sesión!') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
