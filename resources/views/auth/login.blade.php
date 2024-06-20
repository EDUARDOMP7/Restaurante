@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10 p-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border border-gray-200 rounded-lg">
                    <div class="card-header bg-blue-600 text-white font-bold text-lg">
                        {{ __('Login') }}
                    </div>

                    <div class="card-body p-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                    class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-500 text-sm mt-1 block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between mb-4">
                                <div class="form-check">
                                    <input
                                        class="form-check-input rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500"
                                        type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-sm text-gray-700" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="text-blue-600 hover:text-blue-700 text-sm font-medium"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
