<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Client;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::paginate();

        return view('reservation.index', compact('reservations'))
            ->with('i', (request()->input('page', 1) - 1) * $reservations->perPage());
    }

    public function create()
    {
        $reservation = new Reservation();
        $clients = Client::pluck('name', 'id');
        return view('reservation.create', compact('reservation', 'clients'));
    }

    public function store(Request $request)
    {
        $request->validate(Reservation::$rules);

        $reservation = Reservation::create($request->only(['client_id', 'date', 'time', 'notes']));

        return redirect()->route('reservation.index')
            ->with('success', 'Reservation created successfully.');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservation.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservation.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate(Reservation::$rules);

        $reservation->update($request->only(['client_id', 'date', 'time', 'notes']));

        return redirect()->route('reservation.index')
            ->with('success', 'Reservation updated successfully');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservation.index')
            ->with('success', 'Reservation deleted successfully');
    }
}

