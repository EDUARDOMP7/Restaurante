@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employee.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $employee->name }}
                        </div>
                        <div class="form-group">
                            <strong>Position:</strong>
                            {{ $employee->position }}
                        </div>
                        <div class="form-group">
                            <strong>Hire Date:</strong>
                            {{ $employee->hire_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
