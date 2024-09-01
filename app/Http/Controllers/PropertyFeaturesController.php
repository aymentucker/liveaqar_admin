<?php
namespace App\Http\Controllers;

use App\Models\PropertyFeature;
use Illuminate\Http\Request;

class PropertyFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PropertyFeatures = PropertyFeature::all();
        return view("property-features", compact("PropertyFeatures"));

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

        PropertyFeature::create($validatedData);
        // Return a response or redirect

        return redirect()->route('property-features.index')->with('success', 'Property Feature added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyFeature $PropertyFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyFeature $PropertyFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyFeature $PropertyFeature)
    {
            // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
 // update the property type instance
        $PropertyFeature->update($validatedData);
                // Return a response or redirect

        return redirect()->route('property-features.index')->with('success', 'Property Feature updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyFeature $PropertyFeature)
    {
        $PropertyFeature->delete();
        return redirect()->route('property-features.index')->with('success', 'Property Feature deleted successfully!');
    }
}
