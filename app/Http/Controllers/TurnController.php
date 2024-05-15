<?php

namespace App\Http\Controllers;

use App\Models\Turn;
use Illuminate\Http\Request;

/**
 * Class TurnController
 * @package App\Http\Controllers
 */
class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turns = Turn::paginate();

        return view('turn.index', compact('turns'))
            ->with('i', (request()->input('page', 1) - 1) * $turns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turn = new Turn();
        return view('turn.create', compact('turn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Turn::$rules);

        $turn = Turn::create($request->all());

        return redirect()->route('turns.index')
            ->with('success', 'Turn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turn = Turn::find($id);

        return view('turn.show', compact('turn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turn = Turn::find($id);

        return view('turn.edit', compact('turn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Turn $turn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turn $turn)
    {
        request()->validate(Turn::$rules);

        $turn->update($request->all());

        return redirect()->route('turns.index')
            ->with('success', 'Turn updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $turn = Turn::find($id)->delete();

        return redirect()->route('turns.index')
            ->with('success', 'Turn deleted successfully');
    }
}
