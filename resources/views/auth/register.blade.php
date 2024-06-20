@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10 p-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border border-gray-200 rounded-lg">
                    <div class="card-header bg-green-600 text-white font-bold text-lg">
                        {{ __('Register') }}
                    </div>

                    <div class="card-body p-6">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-red-500 text-sm mt-1 block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="text-red-500 text-sm mt-1 block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password"
                                    class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="text-red-500 text-sm mt-1 block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm"
                                    class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password"
                                    class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit" class="btn btn-primary bg-green-600 hover:bg-green-700">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
