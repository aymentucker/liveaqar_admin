<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    use HasFactory;
    protected $fillable = ['name','name_en'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

}
