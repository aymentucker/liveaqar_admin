<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityStateController extends Controller
{


    /**
     * ======>>>>>>> City Controller <<<<<====
     */
    /**
     * Display a listing of the resource.
     */
    public function indexCity()
    {
        $cities = City::all();
        return view("cities", compact("cities"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCity(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        City::create($validatedData);
        return redirect()->route('cities.index')->with('success', 'City added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCity(Request $request, City $city)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        $city->update($validatedData);
        return redirect()->route('cities.index')->with('success', 'City updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCity(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City deleted successfully!');
    }



    /**
     * ======>>>>>>> State Controller <<<<<====
     */

    /**
     * Display the specified resource.
     */
    /**
     * Display a listing of the resource.
     */
    public function indexState()
    {
        $states = State::all();
        $cities = City::all();
        return view("states", compact("states","cities"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeState(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        State::create($validatedData);
        return redirect()->route('states.index')->with('success', 'State added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateState(Request $request, State $state)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
        ]);

        $state->update($validatedData);
        return redirect()->route('states.index')->with('success', 'State updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyState(State $state)
    {
        $state->delete();
        return redirect()->route('states.index')->with('success', 'State deleted successfully!');
    }

    /**
     * Get the States for the city.
     */

    public function getStatesForCity($cityId)
    {
        $regions = State::where('city_id', $cityId)->get();
        return response()->json($regions);
    }
}
