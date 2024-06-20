<div class="bg-white shadow-md rounded-lg p-6">
    <div class="mb-4">

        <div class="mb-4">
            {{ Form::label('name', null, ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
            {{ Form::text('name', $client->name, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('name') ? ' border-red-500' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<p class="text-red-500 text-xs italic mt-2">:message</p>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('email', null, ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
            {{ Form::text('email', $client->email, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('email') ? ' border-red-500' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<p class="text-red-500 text-xs italic mt-2">:message</p>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('telefono', null, ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
            {{ Form::text('telefono', $client->telefono, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('telefono') ? ' border-red-500' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<p class="text-red-500 text-xs italic mt-2">:message</p>') !!}
        </div>

    </div>
    <div class="mt-6">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Submit') }}</button>
    </div>
</div>
