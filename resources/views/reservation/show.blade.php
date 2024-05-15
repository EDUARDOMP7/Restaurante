@extends('layouts.app')

@section('template_title')
    {{ $reservation->name ?? "{{ __('Show') Reservation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservation.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Date Time:</strong>
                            {{ $reservation->date_time }}
                        </div>
                        <div class="form-group">
                            <strong>Client Id:</strong>
                            {{ $reservation->client_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
