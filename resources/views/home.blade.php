@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12">
            <div class="bg-white shadow-sm rounded-lg">
                <div class="p-6 bg-gray-100 border-b">
                    {{ __('Dashboard') }}
                </div>

                <div class="p-6">
                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
