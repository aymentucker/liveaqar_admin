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
    public function index(Request $request)
    {
        $query = Property::with('statuses')->orderBy('created_at', 'desc');

        // Handle search by title
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where('title_en', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('title_ar', 'LIKE', '%' . $searchTerm . '%');
        }

        $properties = $query->paginate(10);

        $cities = City::all();
        $states = State::all();
        $propertyType = PropertyType::all();
        $propertyStatus = PropertyStatus::all();

        return view('properties.index', compact('properties', 'cities', 'states', 'propertyType', 'propertyStatus'));
    }


    public function toggleVisibility(Property $property)
    {
        $property->visibility = !$property->visibility;
        $property->save();

        return redirect()->back()->with('success', 'Property visibility updated successfully!');
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
            'featured_video' => 'nullable|url',
            'type_id' => 'required|exists:property_types,id',
            'property_code' => 'required|string|unique:properties,property_code',
            'phone' => 'required|string',
            'year_built' => 'nullable|integer',
            'statuses' => 'required|array|min:1',
            'statuses.*' => 'exists:property_statuses,id',
        ]);

        // Extract statuses from validated data
        $statuses = $validatedData['statuses'];
        unset($validatedData['statuses']);

        // Create the property
        $property = Property::create($validatedData);

        // Attach statuses
        $property->statuses()->attach($statuses);

        return redirect()->route('properties.index')->with('success', 'Property created successfully!');
    }

    public function update(Request $request, Property $property)
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
            'featured_video' => 'nullable|url',
            'type_id' => 'required|exists:property_types,id',
            'property_code' => 'required|string|unique:properties,property_code,' . $property->id,
            'phone' => 'required|string',
            'year_built' => 'nullable|integer',
            'statuses' => 'required|array|min:1',
            'statuses.*' => 'exists:property_statuses,id',
        ]);

        // Extract statuses from validated data
        $statuses = $validatedData['statuses'];
        unset($validatedData['statuses']);

        // Update the property
        $property->update($validatedData);

        // Sync statuses
        $property->statuses()->sync($statuses);

        return redirect()->route('properties.index')->with('success', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        // Detach all associated statuses
        $property->statuses()->detach();

        // Delete the property
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'Property deleted successfully!');
    }
}
