<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\State;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $cities = City::all();
        $states = State::all();
        $propertyType = PropertyType::all();
        $propertyStatus = PropertyStatus::all();

        return view('properties.index', compact('properties', 'cities', 'states', 'propertyType', 'propertyStatus'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'city_id' => 'required|exists:cities,id',
            'state_id' => 'required|exists:states,id',
            'address' => 'required|string',
            'sell_price' => 'nullable|numeric',
            'rent_price' => 'nullable|numeric',
            'rooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'garages' => 'nullable|integer',
            'area_size' => 'nullable|numeric',
            'featured_video' => 'required|url',
            'type_id' => 'required|exists:property_types,id',
            'property_code' => 'required|string|unique:properties,property_code',
            'statuses' => 'required|array',
            'statuses.*' => 'exists:property_statuses,id',
        ]);

        $property = Property::create($validatedData);
        $property->statuses()->attach($validatedData['statuses']);

        return redirect()->route('properties.index')->with('success', 'Property created successfully!');
    }

    public function update(Request $request, Property $property)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'sell_price' => 'nullable|numeric',
            'rent_price' => 'nullable|numeric',
            'rooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'garages' => 'nullable|integer',
            'area_size' => 'nullable|numeric',
            'featured_video' => 'nullable|url',
            'type_id' => 'required|exists:property_types,id',
            'property_code' => 'required|string|unique:properties,property_code,' . $property->id,
            'statuses' => 'required|array',
            'statuses.*' => 'exists:property_statuses,id',
        ]);

        $property->update($validatedData);
        $property->statuses()->sync($validatedData['statuses']);

        return redirect()->route('properties.index')->with('success', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Property deleted successfully!');
    }


}
