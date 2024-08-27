<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'agency_id',
        'mobile_number',
        'whatsapp',
        'language',
        'address',
    ];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
