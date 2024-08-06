@extends('layouts.app')

@section('template_title')
    Reservation
@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg">
            <div class="flex justify-between items-center bg-gray-100 p-4 border-b">
                <span class="text-lg font-semibold">{{ __('Reservation') }}</span>
                <a href="{{ route('reservation.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Create New') }}
                </a>
            </div>

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                        <thead class="bg-gray-200 border-b">
                            <tr>
                                <th class="py-2 px-4 text-left text-gray-700">No</th>
                                <th class="py-2 px-4 text-left text-gray-700">Date Time</th>
                                <th class="py-2 px-4 text-left text-gray-700">Client Id</th>
                                <th class="py-2 px-4 text-left text-gray-700"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr class="border-b">
                                    <td class="py-2 px-4">{{ ++$i }}</td>
                                    <td class="py-2 px-4">{{ $reservation->date_time }}</td>
                                    <td class="py-2 px-4">{{ $reservation->client->name }}</td>
                                    <td class="py-2 px-4">
                                        <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST"
                                            class="flex space-x-2">
                                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded"
                                                href="{{ route('reservation.show', $reservation->id) }}">
                                                <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                            </a>
                                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded"
                                                href="{{ route('reservation.edit', $reservation->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
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
        {!! $reservations->links() !!}
    </div>
@endsection
