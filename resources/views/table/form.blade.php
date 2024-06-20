<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {!! Form::label('capacity', 'Capacity') !!}
            {!! Form::text('capacity', $table->capacity, [
                'class' => 'form-control' . ($errors->has('capacity') ? ' is-invalid' : ''),
                'placeholder' => 'Capacity',
            ]) !!}
            {!! $errors->first('capacity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'Status') !!}
            {!! Form::text('status', $table->status, [
                'class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''),
                'placeholder' => 'Status',
            ]) !!}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    {{-- <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div> --}}
</div>
