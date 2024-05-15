@extends('layouts.app')

@section('template_title')
    {{ $table->name ?? "{{ __('Show') Table" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Table</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tables.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            {{ $table->capacity }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $table->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
