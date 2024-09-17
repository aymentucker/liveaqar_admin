<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\PropertyStatus;
use App\Models\State;
use App\Models\Agency;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::with(['property_type', 'statuses', 'city', 'state', 'agency'])
            ->get()
            ->map(function ($property) {
                return [
                    'id' => $property->id,
                    'title_en' => $property->title_en,
                    'title_ar' => $property->title_ar,
                    'description_en' => $property->description_en,
                    'description_ar' => $property->description_ar,
                    'property_type_en' => $property->property_type ? $property->property_type->name_en : null,
                    'property_type_ar' => $property->property_type ? $property->property_type->name : null,
                    'property_statuses' => $property->statuses->map(function ($status) {
                        return [
                            'status_name_en' => $status->name_en,
                            'status_name_ar' => $status->name,
                        ];
                    }),
                    'city_en' => $property->city ? $property->city->name_en : null,
                    'city_ar' => $property->city ? $property->city->name : null,
                    'state_en' => $property->state ? $property->state->name_en : null,
                    'state_ar' => $property->state ? $property->state->name : null,
                    'sell_price' => $property->sell_price,
                    'rent_price' => $property->rent_price,
                    'area_size' => $property->area_size,
                    'master_rooms' => $property->master_rooms,
                    'rooms' => $property->rooms,
                    'bathrooms' => $property->bathrooms,
                    'garages' => $property->garages,
                    'garage_size' => $property->garage_size,
                    'property_code' => $property->property_code,
                    'featured_image' => $property->featured_image ?? '',
                    'featured_video' => $property->featured_video,
                    'url_link' => $property->url_link,
                    'year_built' => $property->year_built,
                    'phone' => $property->phone,
                    'address' => $property->address,
                    'featured' => $property->featured,
                    'visibility' => $property->visibility,
                    'features' => $property->features,
                    'agency_id' => $property->agency_id,
                    'agency_name_en' => $property->agency ? $property->agency->name_en : null,
                    'agency_name_ar' => $property->agency ? $property->agency->name : null,
                    'agency_logo' => $property->agency ? $property->agency->logo : null,
                    'agency_phone' => $property->agency ? $property->agency->phone_number : null,
                    'agency_address' => $property->agency ? $property->agency->address : null,
                    'updated_at' => $property->updated_at->toDateTimeString(),
                ];
            });

        if ($properties->isEmpty()) {
            return response()->json(['message' => 'No properties found'], 404);
        }

        return response()->json($properties, 200);
    }

    /**
     * Fetch properties for a specific agency.
     */
    public function fetchPropertiesForAgency($agencyId)
    {
        $properties = Property::with(['property_type', 'statuses', 'city', 'state', 'agency'])
            ->where('agency_id', $agencyId)
            ->orderBy('updated_at', 'desc')
            ->get()
            ->map(function ($property) {
                return [
                    'id' => $property->id,
                    'title_en' => $property->title_en,
                    'title_ar' => $property->title_ar,
                    'description_en' => $property->description_en,
                    'description_ar' => $property->description_ar,
                    'property_type_en' => $property->property_type ? $property->property_type->name_en : null,
                    'property_type_ar' => $property->property_type ? $property->property_type->name : null,
                    'property_statuses' => $property->statuses->map(function ($status) {
                        return [
                            'status_name_en' => $status->name_en,
                            'status_name_ar' => $status->name,
                        ];
                    }),
                    'city_en' => $property->city ? $property->city->name_en : null,
                    'city_ar' => $property->city ? $property->city->name : null,
                    'state_en' => $property->state ? $property->state->name_en : null,
                    'state_ar' => $property->state ? $property->state->name : null,
                    'sell_price' => $property->sell_price,
                    'rent_price' => $property->rent_price,
                    'area_size' => $property->area_size,
                    'master_rooms' => $property->master_rooms,
                    'rooms' => $property->rooms,
                    'bathrooms' => $property->bathrooms,
                    'garages' => $property->garages,
                    'garage_size' => $property->garage_size,
                    'property_code' => $property->property_code,
                    'featured_image' => $property->featured_image ?? '',
                    'featured_video' => $property->featured_video,
                    'url_link' => $property->url_link,
                    'year_built' => $property->year_built,
                    'phone' => $property->phone,
                    'address' => $property->address,
                    'featured' => $property->featured,
                    'visibility' => $property->visibility,
                    'features' => $property->features,
                    'agency_id' => $property->agency_id,
                    'agency_name_en' => $property->agency ? $property->agency->name_en : null,
                    'agency_name_ar' => $property->agency ? $property->agency->name : null,
                    'agency_logo' => $property->agency ? $property->agency->logo : null,
                    'agency_phone' => $property->agency ? $property->agency->phone_number : null,
                    'agency_address' => $property->agency ? $property->agency->address : null,
                    'updated_at' => $property->updated_at->toDateTimeString(),
                ];
            });

        if ($properties->isEmpty()) {
            return response()->json(['message' => 'No properties found for this agency'], 404);
        }

        return response()->json($properties, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'type_id' => 'required|exists:property_types,id',
            'statuses' => 'required|array',
            'statuses.*' => 'exists:property_statuses,id',
            'city_id' => 'required|exists:cities,id',
            'state_id' => 'required|exists:states,id',
            'sell_price' => 'nullable|numeric',
            'rent_price' => 'nullable|numeric',
            'area_size' => 'required|numeric',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'property_code' => 'required|string|unique:properties',
        ]);

        $property = Property::create($validated);
        $property->statuses()->attach($validated['statuses']);

        return response()->json($property, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $property = Property::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'sometimes|required|string|max:255',
            'title_ar' => 'sometimes|required|string|max:255',
            'description_en' => 'sometimes|required|string',
            'description_ar' => 'sometimes|required|string',
            'type_id' => 'sometimes|required|exists:property_types,id',
            'statuses' => 'sometimes|array',
            'statuses.*' => 'exists:property_statuses,id',
            'city_id' => 'sometimes|required|exists:cities,id',
            'state_id' => 'sometimes|required|exists:states,id',
            'sell_price' => 'nullable|numeric',
            'rent_price' => 'nullable|numeric',
            'area_size' => 'sometimes|required|numeric',
            'rooms' => 'sometimes|required|integer',
            'bathrooms' => 'sometimes|required|integer',
            'property_code' => 'sometimes|required|string|unique:properties,property_code,' . $property->id,
        ]);

        $property->update($validated);

        if (isset($validated['statuses'])) {
            $property->statuses()->sync($validated['statuses']);
        }

        return response()->json($property, 200);
    }

    /**
     * Filter properties based on various criteria.
     */
    public function filter(Request $request)
    {
        // Validate the input
        $request->validate([
            'agency_id' => 'nullable|integer',
            'type_id' => 'nullable|integer',
            'statuses' => 'nullable|array',
            'statuses.*' => 'exists:property_statuses,id',
            'state_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'min_sell_price' => 'nullable|numeric',
            'max_sell_price' => 'nullable|numeric',
            'min_rent_price' => 'nullable|numeric',
            'max_rent_price' => 'nullable|numeric',
            'min_area_size' => 'nullable|numeric',
            'max_area_size' => 'nullable|numeric',
            'rooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'garages' => 'nullable|integer',
            'featured' => 'nullable|boolean',
            'visibility' => 'nullable|boolean',
        ]);

        // Create a query builder for the Property model
        $query = Property::with(['property_type', 'statuses', 'city', 'state', 'agency']);

        // Apply filters based on the request inputs
        if ($request->filled('agency_id')) {
            $query->where('agency_id', $request->agency_id);
        }

        if ($request->filled('type_id')) {
            $query->where('type_id', $request->type_id);
        }

        if ($request->filled('statuses')) {
            $query->whereHas('statuses', function ($q) use ($request) {
                $q->whereIn('status_id', $request->statuses);
            });
        }

        if ($request->filled('state_id')) {
            $query->where('state_id', $request->state_id);
        }

        if ($request->filled('city_id')) {
            $query->where('city_id', $request->city_id);
        }

        // Handle filtering by sell price range
        if ($request->filled('min_sell_price') || $request->filled('max_sell_price')) {
            $query->whereBetween('sell_price', [
                (float) $request->input('min_sell_price', 0),
                (float) $request->input('max_sell_price', PHP_INT_MAX)
            ]);
        }

        // Handle filtering by rent price range
        if ($request->filled('min_rent_price') || $request->filled('max_rent_price')) {
            $query->whereBetween('rent_price', [
                (float) $request->input('min_rent_price', 0),
                (float) $request->input('max_rent_price', PHP_INT_MAX)
            ]);
        }

        // Handle filtering by area size range
        if ($request->filled('min_area_size') || $request->filled('max_area_size')) {
            $query->whereBetween('area_size', [
                (float) $request->input('min_area_size', 0),
                (float) $request->input('max_area_size', PHP_INT_MAX)
            ]);
        }

        if ($request->filled('rooms')) {
            $query->where('rooms', $request->rooms);
        }

        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', $request->bathrooms);
        }

        if ($request->filled('garages')) {
            $query->where('garages', $request->garages);
        }

        if ($request->filled('featured')) {
            $query->where('featured', $request->featured);
        }

        if ($request->filled('visibility')) {
            $query->where('visibility', $request->visibility);
        }

        // Fetch the filtered results
        $properties = $query->get()->map(function ($property) {
            return [
                'id' => $property->id,
                'title_en' => $property->title_en,
                'title_ar' => $property->title_ar,
                'description_en' => $property->description_en,
                'description_ar' => $property->description_ar,
                'property_type_en' => $property->property_type ? $property->property_type->name_en : null,
                'property_type_ar' => $property->property_type ? $property->property_type->name_ar : null,
                'property_statuses' => $property->statuses->map(function ($status) {
                    return [
                        'status_name_en' => $status->name_en,
                        'status_name_ar' => $status->name,
                    ];
                }),
                'city_en' => $property->city ? $property->city->name_en : null,
                'city_ar' => $property->city ? $property->city->name : null,
                'state_en' => $property->state ? $property->state->name_en : null,
                'state_ar' => $property->state ? $property->state->name : null,
                'sell_price' => $property->sell_price,
                'rent_price' => $property->rent_price,
                'area_size' => $property->area_size,
                'master_rooms' => $property->master_rooms,
                'rooms' => $property->rooms,
                'bathrooms' => $property->bathrooms,
                'garages' => $property->garages,
                'garage_size' => $property->garage_size,
                'property_code' => $property->property_code,
                'featured_image' => $property->featured_image ?? '',
                'featured_video' => $property->featured_video,
                'url_link' => $property->url_link,
                'year_built' => $property->year_built,
                'phone' => $property->phone,
                'address' => $property->address,
                'featured' => $property->featured,
                'visibility' => $property->visibility,
                'features' => $property->features,
                'agency_id' => $property->agency_id,
                'agency_name_en' => $property->agency ? $property->agency->name_en : null,
                'agency_name_ar' => $property->agency ? $property->agency->name_ar : null,
                'agency_logo' => $property->agency ? $property->agency->logo : null,
                'agency_phone' => $property->agency ? $property->agency->phone_number : null,
                'agency_address' => $property->agency ? $property->agency->address : null,
                'updated_at' => $property->updated_at->toDateTimeString(),
            ];
        });

        // Return a message if no properties are found
        if ($properties->isEmpty()) {
            return response()->json(['message' => 'No properties found with the specified filters'], 404);
        }

        return response()->json($properties, 200);
    }



    /**
     * Search properties by title in both Arabic and English.
     */
    public function search(Request $request)
    {
        // Validate that a query is provided
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $query = $request->input('query');

        // Search by title in both Arabic and English
        $properties = Property::with(['property_type', 'statuses', 'city', 'state', 'agency'])
            ->where('title_en', 'like', "%{$query}%")
            ->orWhere('title_ar', 'like', "%{$query}%")
            ->get()
            ->map(function ($property) {
                return [
                    'id' => $property->id,
                    'title_en' => $property->title_en,
                    'title_ar' => $property->title_ar,
                    'description_en' => $property->description_en,
                    'description_ar' => $property->description_ar,
                    'property_type_en' => $property->property_type ? $property->property_type->name_en : null,
                    'property_type_ar' => $property->property_type ? $property->property_type->name_ar : null,
                    'property_statuses' => $property->statuses->map(function ($status) {
                        return [
                            'status_name_en' => $status->name_en,
                            'status_name_ar' => $status->name,
                        ];
                    }),
                    'city_en' => $property->city ? $property->city->name_en : null,
                    'city_ar' => $property->city ? $property->city->name : null,
                    'state_en' => $property->state ? $property->state->name_en : null,
                    'state_ar' => $property->state ? $property->state->name : null,
                    'sell_price' => $property->sell_price,
                    'rent_price' => $property->rent_price,
                    'area_size' => $property->area_size,
                    'master_rooms' => $property->master_rooms,
                    'rooms' => $property->rooms,
                    'bathrooms' => $property->bathrooms,
                    'garages' => $property->garages,
                    'garage_size' => $property->garage_size,
                    'property_code' => $property->property_code,
                    'featured_image' => $property->featured_image ?? '',
                    'featured_video' => $property->featured_video,
                    'url_link' => $property->url_link,
                    'year_built' => $property->year_built,
                    'phone' => $property->phone,
                    'address' => $property->address,
                    'featured' => $property->featured,
                    'visibility' => $property->visibility,
                    'features' => $property->features,
                    'agency_id' => $property->agency_id,
                    'agency_name_en' => $property->agency ? $property->agency->name_en : null,
                    'agency_name_ar' => $property->agency ? $property->agency->name_ar : null,
                    'agency_logo' => $property->agency ? $property->agency->logo : null,
                    'agency_phone' => $property->agency ? $property->agency->phone_number : null,
                    'agency_address' => $property->agency ? $property->agency->address : null,
                    'updated_at' => $property->updated_at->toDateTimeString(),
                ];
            });

        // Return a message if no properties are found
        if ($properties->isEmpty()) {
            return response()->json(['message' => 'No properties found with the specified query'], 404);
        }

        return response()->json($properties, 200);
    }


    /**
     * Fetch all property types.
     */
    public function getPropertyTypes()
    {
        $propertyTypes = PropertyType::all(['id', 'name_en', 'name']);
        return response()->json($propertyTypes, 200);
    }

    /**
     * Fetch all property statuses.
     */
    public function getPropertyStatuses()
    {
        $propertyStatuses = PropertyStatus::all(['id', 'name_en', 'name']);
        return response()->json($propertyStatuses, 200);
    }

    /**
     * Fetch all states.
     */
    public function getStates()
    {
        $states = State::all(['id', 'name_en', 'name']);
        return response()->json($states, 200);
    }

    /**
     * Fetch all agencies.
     */
    public function getAgencies()
    {
        $agencies = Agency::all(['id', 'name_en', 'name', 'logo']);
        return response()->json($agencies, 200);
    }
}
