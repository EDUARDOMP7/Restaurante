@extends('layouts.app')

@section('template_title')
    {{ $payment->name ?? "{{ __('Show') Payment" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Payment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('payment.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Client Id:</strong>
                            {{ $payment->client_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total Amount:</strong>
                            {{ $payment->total_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Method:</strong>
                            {{ $payment->payment_method }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
