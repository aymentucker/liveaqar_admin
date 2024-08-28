<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'name_en', 'image', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
