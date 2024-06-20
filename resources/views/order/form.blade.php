<div class="bg-white shadow-md rounded-lg p-6">
    <div class="space-y-4">
        <div class="form-group">
            {{ Form::label('date_time', 'Time', ['class' => 'block text-gray-700']) }}
            {{ Form::datetimeLocal('date_time', $order->date_time, ['class' => 'form-input mt-1 block w-full' . ($errors->has('date_time') ? ' border-red-500' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('date_time', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio', null, ['class' => 'block text-gray-700']) }}
            {{ Form::text('precio', $order->precio, ['class' => 'form-input mt-1 block w-full' . ($errors->has('precio') ? ' border-red-500' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('client_id', null, ['class' => 'block text-gray-700']) }}
            {{ Form::select('client_id', $clients, $order->client_id, ['class' => 'form-select mt-1 block w-full' . ($errors->has('client_id') ? ' border-red-500' : ''), 'placeholder' => 'Client Id']) }}
            {!! $errors->first('client_id', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('table_id', null, ['class' => 'block text-gray-700']) }}
            {{ Form::select('table_id', $table, $order->table_id, ['class' => 'form-select mt-1 block w-full' . ($errors->has('table_id') ? ' border-red-500' : ''), 'placeholder' => 'Table Id']) }}
            {!! $errors->first('table_id', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>
    </div>
    <div class="mt-6">
        {{-- <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">{{ __('Submit') }}</button> --}}
    </div>
</div>
