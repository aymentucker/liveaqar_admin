<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\City;
use App\Models\State;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $cities = City::all(); // Assuming you have a City model
        $states = State::all(); // Assuming you have a State model
        $propertyStatus = PropertyStatus::all();
        $propertyType = PropertyType::all();
        $properties = Property::all();


        return view('properties.index', compact('properties', 'propertyStatus', 'propertyType', 'cities', 'states', ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("properties.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'type_id' => 'required|integer|exists:property_types,id',
            'status_id' => 'required|integer|exists:property_statuses,id',
            'city_id' => 'required|integer|exists:cities,id',
            'state_id' => 'required|integer|exists:states,id',
            'price' => 'nullable|numeric',
            'area_size' => 'nullable|numeric',
            'rooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'property_code' => 'required|string|unique:properties,property_code',
            'address' => 'nullable|string',
            'year_built' => 'nullable|integer',
            'garages' => 'nullable|integer',
            'featured_video' => 'nullable|url',
            'phone' => 'nullable|string',
        ]);

        // Create new property instance
        $property = new Property($validatedData);
        $property->save();

        // Return a response or redirect
        return redirect()->route('properties.index')->with('success', 'Property added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }
}
