<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'feature_name',
        'feature_value',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
