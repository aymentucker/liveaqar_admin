<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::with(['property_type', 'property_status', 'city', 'state', 'agency'])
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
                    'property_status_en' => $property->property_status ? $property->property_status->name_en : null,
                    'property_status_ar' => $property->property_status ? $property->property_status->name : null,
                    'city_en' => $property->city ? $property->city->name_en : null,
                    'city_ar' => $property->city ? $property->city->name : null,
                    'state_en' => $property->state ? $property->state->name_en : null,
                    'state_ar' => $property->state ? $property->state->name : null,
                    'price' => $property->price,
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
     * Fetch properties for a agency
     */

    public function fetchPropertiesForAgency($agencyId)
    {

        $properties = Property::with(['property_type', 'property_status', 'city', 'state', 'agency'])
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
                    'property_status_en' => $property->property_status ? $property->property_status->name_en : null,
                    'property_status_ar' => $property->property_status ? $property->property_status->name : null,
                    'city_en' => $property->city ? $property->city->name_en : null,
                    'city_ar' => $property->city ? $property->city->name : null,
                    'state_en' => $property->state ? $property->state->name_en : null,
                    'state_ar' => $property->state ? $property->state->name : null,
                    'price' => $property->price,
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
            'status_id' => 'required|exists:property_statuses,id',
            'city_id' => 'required|exists:cities,id',
            'state_id' => 'required|exists:states,id',
            'price' => 'required|numeric',
            'area_size' => 'required|numeric',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'property_code' => 'required|string|unique:properties',
        ]);

        $property = Property::create($validated);

        return response()->json($property, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $property = Property::findOrFail($id);
        return response()->json($property, 200);
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
            'status_id' => 'sometimes|required|exists:property_statuses,id',
            'city_id' => 'sometimes|required|exists:cities,id',
            'state_id' => 'sometimes|required|exists:states,id',
            'price' => 'sometimes|required|numeric',
            'area_size' => 'sometimes|required|numeric',
            'rooms' => 'sometimes|required|integer',
            'bathrooms' => 'sometimes|required|integer',
            'property_code' => 'sometimes|required|string|unique:properties,property_code,' . $property->id,
        ]);

        $property->update($validated);

        return response()->json($property, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return response()->json(null, 204);
    }

    /**
     * Filter properties based on various criteria.
     */
    public function filter(Request $request)
    {
        $request->validate([
            'agency_id' => 'nullable|integer',
            'type_id' => 'nullable|integer',
            'status_id' => 'nullable|integer',
            'state_id' => 'nullable|integer',
            'min_price' => 'nullable|numeric',
            'max_price' => 'nullable|numeric',
        ]);

        $query = Property::with(['property_type', 'property_status', 'city', 'state', 'agency']);

        if ($request->filled('agency_id')) {
            $query->where('agency_id', $request->agency_id);
        }

        if ($request->filled('type_id')) {
            $query->where('type_id', $request->type_id);
        }

        if ($request->filled('status_id')) {
            $query->where('status_id', $request->status_id);
        }
        if ($request->filled('state_id')) {
            $query->where('state_id', $request->state_id);
        }

        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [(float) $request->min_price, (float) $request->max_price]);
        }

        $properties = $query->get()->map(function ($property) {
            return [
                'id' => $property->id,
                'title_en' => $property->title_en,
                'title_ar' => $property->title_ar,
                'description_en' => $property->description_en,
                'description_ar' => $property->description_ar,
                'property_type_en' => $property->property_type ? $property->property_type->name_en : null,
                'property_type_ar' => $property->property_type ? $property->property_type->name_ar : null,
                'property_status_en' => $property->property_status ? $property->property_status->name_en : null,
                'property_status_ar' => $property->property_status ? $property->property_status->name_ar : null,
                'city_en' => $property->city ? $property->city->name_en : null,
                'city_ar' => $property->city ? $property->city->name_ar : null,
                'state_en' => $property->state ? $property->state->name_en : null,
                'state_ar' => $property->state ? $property->state->name_ar : null,
                'price' => $property->price,
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

        if ($properties->isEmpty()) {
            return response()->json(['message' => 'No properties found with the specified filters'], 404);
        }

        return response()->json($properties, 200);
    }




}
