@extends('layouts.app')

@section('template_title')
    {{ $turn->name ?? "{{ __('Show') Turn" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Turn</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('turns.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            {{ $turn->start_time }}
                        </div>
                        <div class="form-group">
                            <strong>End Time:</strong>
                            {{ $turn->end_time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
