@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Employee
@endsection

@section('content')
    <section class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full max-w-lg">

                @includeif('partials.errors')

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 p-4">
                        <h2 class="text-white text-lg font-semibold">{{ __('Update') }} Employee</h2>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('employee.update', $employee->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('employee.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
