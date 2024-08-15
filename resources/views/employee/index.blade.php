@extends('layouts.app')

@section('template_title')
    Employee
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full">

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 p-4 flex justify-between items-center">
                        <h2 class="text-white text-lg font-semibold">
                            {{ __('Employee') }}
                        </h2>
                        <a href="{{ route('employee.create') }}"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            {{ __('Create New') }}
                        </a>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b">No</th>
                                        <th class="py-2 px-4 border-b">Name</th>
                                        <th class="py-2 px-4 border-b">Position</th>
                                        <th class="py-2 px-4 border-b">Hire Date</th>
                                        <th class="py-2 px-4 border-b"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td class="py-2 px-4 border-b">{{ ++$i }}</td>
                                            <td class="py-2 px-4 border-b">{{ $employee->name }}</td>
                                            <td class="py-2 px-4 border-b">{{ $employee->position }}</td>
                                            <td class="py-2 px-4 border-b">{{ $employee->hire_date }}</td>
                                            <td class="py-2 px-4 border-b text-right">
                                                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                                    <a class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600"
                                                        href="{{ route('employee.show', $employee->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600"
                                                        href="{{ route('employee.edit', $employee->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {!! $employees->links('pagination::tailwind') !!}
            </div>
        </div>
    </div>
@endsection
