<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'agency_id',
        'title',
        'content',
        'title_en',
        'content_en',
        'rating',
        'email',
        'visibility',
        'display_location',
    ];

    protected $casts = [
        'display_location' => 'array',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
