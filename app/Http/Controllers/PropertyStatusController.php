<?php

namespace App\Http\Controllers;

use App\Models\PropertyStatus;
use Illuminate\Http\Request;

class PropertyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertystatuses = PropertyStatus::all();
        return view("propertystatus", compact("propertystatuses"));

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

        // Create new property status instance

        PropertyStatus::create($validatedData);
        // Return a response or redirect

        return redirect()->route('property-status.index')->with('success', 'Property Status added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyStatus $propertyStatus)
    {
            // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
 // update the property status instance
        $propertyStatus->update($validatedData);
                // Return a response or redirect

        return redirect()->route('property-status.index')->with('success', 'Property Status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyStatus $propertyStatus)
    {
        $propertyStatus->delete();
        return redirect()->route('property-status.index')->with('success', 'Property Status deleted successfully!');
    }
}
