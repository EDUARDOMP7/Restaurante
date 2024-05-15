<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('date_time', 'Time') }}
            {{ Form::datetimeLocal('date_time', $order->date_time, ['class' => 'form-control' . ($errors->has('date_time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('date_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $order->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('client_id') }}
            {{ Form::select('client_id',$clients, $order->client_id, ['class' => 'form-control' . ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Client Id']) }}
            {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('table_id') }}
            {{ Form::select('table_id', $table,$order->table_id, ['class' => 'form-control' . ($errors->has('table_id') ? ' is-invalid' : ''), 'placeholder' => 'Table Id']) }}
            {!! $errors->first('table_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
