<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'name_en',
        'description',
        'description_en',
        'logo',
        'email',
        'whatsapp',
        'phone_number',
        'fax_number',
        'license',
        'website_url',
        'social_media',
        'address',
    ];

    protected $casts = [
        'social_media' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function agents()
    {
        return $this->hasMany(Agent::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
