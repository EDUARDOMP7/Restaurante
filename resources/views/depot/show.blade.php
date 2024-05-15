@extends('layouts.app')

@section('template_title')
    {{ $depot->name ?? "{{ __('Show') Depot" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Depot</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('depots.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ingredient Id:</strong>
                            {{ $depot->ingredient_id }}
                        </div>
                        <div class="form-group">
                            <strong>Available Quantity:</strong>
                            {{ $depot->available_quantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
