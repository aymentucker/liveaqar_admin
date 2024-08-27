<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'type_id',
        'status_id',
        'city_id',
        'state_id',
        'featured_image',
        'featured_video',
        'gallery',
        'price',
        'area_size',
        'master_rooms',
        'rooms',
        'bathrooms',
        'garages',
        'garage_size',
        'year_built',
        'phone',
        'address',
        'private_note',
        'property_code',
        'property_documents',
        'visibility',
        'labels',
        'features',
        'additional_features',
    ];

    protected $casts = [
        'gallery' => 'array',
        'property_documents' => 'array',
        'labels' => 'array',
        'features' => 'array',
        'additional_features' => 'array',
    ];

    public function type()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function status()
    {
        return $this->belongsTo(PropertyStatus::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function subProperties()
    {
        return $this->hasMany(SubProperty::class);
    }

    public function floorPlans()
    {
        return $this->hasMany(FloorPlan::class);
    }

    public function additionalFeatures()
    {
        return $this->hasMany(AdditionalFeature::class);
    }
}
