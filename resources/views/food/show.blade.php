@extends('layouts.app')

@section('template_title')
    {{ $food->name ?? "{{ __('Show') Food" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Food</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('food.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
