<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'user_id',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'type_id',
        'city_id',
        'state_id',
        'featured_image',
        'featured_video',
        'virtual_tour_link',
        'url_link',
        'gallery',
        'sell_price',
        'rent_price',
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
        'sell_price' => 'decimal:2',
        'rent_price' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function property_type()
    {
        return $this->belongsTo(PropertyType::class, 'type_id');
    }

    public function property_status()
    {
        return $this->belongsTo(PropertyStatus::class, 'status_id');
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



    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id');
    }
    public function statuses()
    {
        return $this->belongsToMany(PropertyStatus::class, 'property_property_status', 'property_id', 'status_id');
    }
}
