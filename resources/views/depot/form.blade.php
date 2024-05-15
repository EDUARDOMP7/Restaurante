<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ingredient_id') }}
            {{ Form::text('ingredient_id', $depot->ingredient_id, ['class' => 'form-control' . ($errors->has('ingredient_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingredient Id']) }}
            {!! $errors->first('ingredient_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('available_quantity') }}
            {{ Form::text('available_quantity', $depot->available_quantity, ['class' => 'form-control' . ($errors->has('available_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Available Quantity']) }}
            {!! $errors->first('available_quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>