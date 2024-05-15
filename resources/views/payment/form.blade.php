<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('client_id') }}
            {{ Form::select('client_id', $clients,$payment->client_id, ['class' => 'form-control' . ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Client Id']) }}
            {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_amount') }}
            {{ Form::text('total_amount', $payment->total_amount, ['class' => 'form-control' . ($errors->has('total_amount') ? ' is-invalid' : ''), 'placeholder' => 'Total Amount']) }}
            {!! $errors->first('total_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_method') }}
            {{ Form::text('payment_method', $payment->payment_method, ['class' => 'form-control' . ($errors->has('payment_method') ? ' is-invalid' : ''), 'placeholder' => 'Payment Method']) }}
            {!! $errors->first('payment_method', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
