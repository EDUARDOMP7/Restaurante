<div class="bg-white shadow-md rounded-lg p-6">
    <div class="space-y-6">

        <div class="form-group">
            {{ Form::label('date_time', 'Time', ['class' => 'block text-gray-700 font-semibold']) }}
            {{ Form::datetimeLocal('date_time', $reservation->date_time, ['class' => 'mt-1 block w-full border-gray-300 rounded-md shadow-sm' . ($errors->has('date_time') ? ' border-red-500' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('date_time', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('client_id', null, ['class' => 'block text-gray-700 font-semibold']) }}
            {{ Form::select('client_id', $clients, $reservation->client_id, ['class' => 'mt-1 block w-full border-gray-300 rounded-md shadow-sm' . ($errors->has('client_id') ? ' border-red-500' : ''), 'placeholder' => 'Client Id']) }}
            {!! $errors->first('client_id', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

    </div>
    <div class="mt-6">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Submit') }}</button>
    </div>
</div>
