<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('employee_id') }}
            {{ Form::text('employee_id', $attendance->employee_id, ['class' => 'form-control' . ($errors->has('employee_id') ? ' is-invalid' : ''), 'placeholder' => 'Employee Id']) }}
            {!! $errors->first('employee_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('turns_id') }}
            {{ Form::text('turns_id', $attendance->turns_id, ['class' => 'form-control' . ($errors->has('turns_id') ? ' is-invalid' : ''), 'placeholder' => 'Turns Id']) }}
            {!! $errors->first('turns_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $attendance->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>