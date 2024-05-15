<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('food_id') }}
            {{ Form::text('food_id', $dishingredient->food_id, ['class' => 'form-control' . ($errors->has('food_id') ? ' is-invalid' : ''), 'placeholder' => 'Food Id']) }}
            {!! $errors->first('food_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredients_id') }}
            {{ Form::text('ingredients_id', $dishingredient->ingredients_id, ['class' => 'form-control' . ($errors->has('ingredients_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingredients Id']) }}
            {!! $errors->first('ingredients_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('required_quantity') }}
            {{ Form::text('required_quantity', $dishingredient->required_quantity, ['class' => 'form-control' . ($errors->has('required_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Required Quantity']) }}
            {!! $errors->first('required_quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>