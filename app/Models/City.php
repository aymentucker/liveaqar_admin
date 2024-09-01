<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name','name_en','image'];

       /**
     * Get the regions for the city.
     */
    public function regions()
    {
        return $this->hasMany(State::class);
    }
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
