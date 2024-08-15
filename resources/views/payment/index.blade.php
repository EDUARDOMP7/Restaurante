@extends('layouts.app')

@section('template_title')
    Payment
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex justify-center">
            <div class="w-full max-w-7xl">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 p-4 flex justify-between items-center">
                        <h2 class="text-white text-lg font-semibold">
                            {{ __('Payment') }}
                        </h2>
                        <a href="{{ route('payment.create') }}"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            {{ __('Create New') }}
                        </a>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="bg-green-500 text-white p-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No</th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Client Name</th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total Amount</th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Payment Method</th>
                                        <th class="px-6 py-3 bg-gray-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($payments as $payment)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ ++$i }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $payment->client->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $payment->total_amount }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $payment->payment_method }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <form action="{{ route('payment.destroy', $payment->id) }}" method="POST">
                                                    <a href="{{ route('payment.show', $payment->id) }}"
                                                        class="text-blue-600 hover:text-blue-900 mr-2">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                    </a>
                                                    <a href="{{ route('payment.edit', $payment->id) }}"
                                                        class="text-green-600 hover:text-green-900 mr-2">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $payments->links() !!}
            </div>
        </div>
    </div>
@endsection
