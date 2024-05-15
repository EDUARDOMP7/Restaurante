@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? "{{ __('Show') Order" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date Time:</strong>
                            {{ $order->date_time }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $order->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Client Id:</strong>
                            {{ $order->client_id }}
                        </div>
                        <div class="form-group">
                            <strong>Table Id:</strong>
                            {{ $order->table_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
