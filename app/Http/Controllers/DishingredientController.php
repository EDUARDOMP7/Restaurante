<?php

namespace App\Http\Controllers;

use App\Models\Dishingredient;
use Illuminate\Http\Request;

/**
 * Class DishingredientController
 * @package App\Http\Controllers
 */
class DishingredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishingredients = Dishingredient::paginate();

        return view('dishingredient.index', compact('dishingredients'))
            ->with('i', (request()->input('page', 1) - 1) * $dishingredients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dishingredient = new Dishingredient();
        return view('dishingredient.create', compact('dishingredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dishingredient::$rules);

        $dishingredient = Dishingredient::create($request->all());

        return redirect()->route('dishingredients.index')
            ->with('success', 'Dishingredient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dishingredient = Dishingredient::find($id);

        return view('dishingredient.show', compact('dishingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dishingredient = Dishingredient::find($id);

        return view('dishingredient.edit', compact('dishingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dishingredient $dishingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dishingredient $dishingredient)
    {
        request()->validate(Dishingredient::$rules);

        $dishingredient->update($request->all());

        return redirect()->route('dishingredients.index')
            ->with('success', 'Dishingredient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dishingredient = Dishingredient::find($id)->delete();

        return redirect()->route('dishingredients.index')
            ->with('success', 'Dishingredient deleted successfully');
    }
}
