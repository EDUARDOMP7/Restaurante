@extends('layouts.app')

@section('template_title')
    {{ __('Order') }}
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex justify-center">
            <div class="w-full max-w-7xl">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white p-4 flex justify-between items-center">
                        <span class="text-lg font-semibold">{{ __('Order') }}</span>
                        <a href="{{ route('orders.create') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                            {{ __('Create New') }}
                        </a>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="bg-green-100 text-green-800 p-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date Time</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Precio</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Client</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Table</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ ++$i }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $order->date_time }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $order->precio }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $order->client->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $order->table_id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                                    <a class="text-indigo-600 hover:text-indigo-900"
                                                        href="{{ route('orders.show', $order->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="text-green-600 hover:text-green-900 ml-2"
                                                        href="{{ route('orders.edit', $order->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-2"><i
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
                <div class="mt-4">
                    {!! $orders->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
