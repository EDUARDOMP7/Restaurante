<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Client;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::paginate()

        return view('reservation.index', compact('reservacion'))
            ->with('i', (request()->input('page', 1) - 1) * $reservations->perPage());
    }

    public function create()
    {
        $reservation = new Reservation();
        $clients=Client::lists('name','id');
        return view('reservation.create', compact('reservation','clients'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), Reservation::$rules);

        $reservation = Reservation::create($request->all());

        return redirect()->route('reservation.index')
            ->with('success', 'Reservation created successfully.');
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $this->validate(request(), Reservation::$rules);

        $reservation->update($request->all());

        return redirect()->route('reservation.index')
            ->with('success', 'Reservation updated successfully');
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id)->delete();

        return redirect()->route('reservation.index')
            ->with('success', 'Reservation deleted successfully');
    }
}
