<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
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

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
