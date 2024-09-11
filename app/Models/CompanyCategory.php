<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_en',
        'image',
    ];
    public function category()
    {
        return $this->hasMany(Company::class);
    }

}
