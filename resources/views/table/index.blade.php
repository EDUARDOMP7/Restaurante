@extends('layouts.app')

@section('template_title')
    Table
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="p-6 bg-gray-800 text-white">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{ __('Table') }}</h2>
                    <a href="{{ route('table.create') }}" class="btn btn-primary btn-sm">
                        {{ __('Create New') }}
                    </a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-4" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="table-auto min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Capacity</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($tables as $table)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $table->capacity }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $table->status }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex items-center justify-end">
                                            <a href="{{ route('table.show', $table->id) }}"
                                                class="text-indigo-600 hover:text-indigo-900 mr-2">
                                                <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                            </a>
                                            <a href="{{ route('table.edit', $table->id) }}"
                                                class="text-green-600 hover:text-green-900 mr-2">
                                                <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                            </a>
                                            <form action="{{ route('table.destroy', $table->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="p-6">
                {!! $tables->links() !!}
            </div>
        </div>
    </div>
@endsection
