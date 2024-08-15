<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="space-y-4">

        <div class="mb-4">
            {{ Form::label('client_id', null, ['class' => 'block text-sm font-medium text-gray-700']) }}
            {{ Form::select('client_id', $clients, $payment->client_id, ['class' => 'mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm' . ($errors->has('client_id') ? ' border-red-500' : ''), 'placeholder' => 'Select a Client']) }}
            {!! $errors->first('client_id', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

        <div class="mb-4">
            {{ Form::label('total_amount', null, ['class' => 'block text-sm font-medium text-gray-700']) }}
            {{ Form::text('total_amount', $payment->total_amount, ['class' => 'mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm' . ($errors->has('total_amount') ? ' border-red-500' : ''), 'placeholder' => 'Total Amount']) }}
            {!! $errors->first('total_amount', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

        <div class="mb-4">
            {{ Form::label('payment_method', null, ['class' => 'block text-sm font-medium text-gray-700']) }}
            {{ Form::text('payment_method', $payment->payment_method, ['class' => 'mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm' . ($errors->has('payment_method') ? ' border-red-500' : ''), 'placeholder' => 'Payment Method']) }}
            {!! $errors->first('payment_method', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

    </div>
    <div class="mt-6">
        <button type="submit"
            class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ __('Submit') }}
        </button>
    </div>
</div>
