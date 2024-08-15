<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="space-y-4">

        <div class="mb-4">
            {{ Form::label('name', null, ['class' => 'block text-sm font-medium text-gray-700']) }}
            {{ Form::text('name', $employee->name, ['class' => 'mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm' . ($errors->has('name') ? ' border-red-500' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

        <div class="mb-4">
            {{ Form::label('position', null, ['class' => 'block text-sm font-medium text-gray-700']) }}
            {{ Form::text('position', $employee->position, ['class' => 'mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm' . ($errors->has('position') ? ' border-red-500' : ''), 'placeholder' => 'Position']) }}
            {!! $errors->first('position', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

        <div class="mb-4">
            {{ Form::label('hire_date', null, ['class' => 'block text-sm font-medium text-gray-700']) }}
            {{ Form::text('hire_date', $employee->hire_date, ['class' => 'mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm' . ($errors->has('hire_date') ? ' border-red-500' : ''), 'placeholder' => 'Hire Date']) }}
            {!! $errors->first('hire_date', '<div class="text-red-500 text-sm mt-1">:message</div>') !!}
        </div>

    </div>
    <div class="mt-6">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
            {{ __('Submit') }}
        </button>
    </div>
</div>
