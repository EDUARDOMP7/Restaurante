@extends('layouts.app')

@section('template_title')
    {{ $dishingredient->name ?? "{{ __('Show') Dishingredient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dishingredient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dishingredients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Food Id:</strong>
                            {{ $dishingredient->food_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredients Id:</strong>
                            {{ $dishingredient->ingredients_id }}
                        </div>
                        <div class="form-group">
                            <strong>Required Quantity:</strong>
                            {{ $dishingredient->required_quantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
