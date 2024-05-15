<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use Illuminate\Http\Request;

/**
 * Class DepotController
 * @package App\Http\Controllers
 */
class DepotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depots = Depot::paginate();

        return view('depot.index', compact('depots'))
            ->with('i', (request()->input('page', 1) - 1) * $depots->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depot = new Depot();
        return view('depot.create', compact('depot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Depot::$rules);

        $depot = Depot::create($request->all());

        return redirect()->route('depots.index')
            ->with('success', 'Depot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depot = Depot::find($id);

        return view('depot.show', compact('depot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depot = Depot::find($id);

        return view('depot.edit', compact('depot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Depot $depot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depot $depot)
    {
        request()->validate(Depot::$rules);

        $depot->update($request->all());

        return redirect()->route('depots.index')
            ->with('success', 'Depot updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $depot = Depot::find($id)->delete();

        return redirect()->route('depots.index')
            ->with('success', 'Depot deleted successfully');
    }
}
