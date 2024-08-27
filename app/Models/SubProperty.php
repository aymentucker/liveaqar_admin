<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProperty extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'title',
        'description',
        'price',
        'bedrooms',
        'bathrooms',
        'property_size',
        'property_type_id',
        'availability_date',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
