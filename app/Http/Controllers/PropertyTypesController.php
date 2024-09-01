<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;


class PropertyTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyTypes = PropertyType::all();
        return view("property-types", compact("propertyTypes"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        // Create new property type instance

        PropertyType::create($validatedData);
        // Return a response or redirect

        return redirect()->route('property-types.index')->with('success', 'Property Type added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyType $propertyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyType $propertyType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyType $propertyType)
    {
            // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
 // update the property type instance
        $propertyType->update($validatedData);
                // Return a response or redirect

        return redirect()->route('property-type.index')->with('success', 'Property type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();
        return redirect()->route('property-type.index')->with('success', 'Property type deleted successfully!');
    }
}
