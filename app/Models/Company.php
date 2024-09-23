<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
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

    public function reviews()
    {
        return $this->hasMany(CompanyReview::class);
    }

     // Relationship to sub-categories
     public function categories()
     {
         return $this->belongsToMany(CompanyCategory::class, 'company_company_category');
     }

     // Accessor to get main categories through sub-categories
     public function getMainCategoriesAttribute()
     {
         return $this->categories->map(function ($category) {
             return $category->parent;
         })->unique()->filter();
     }
}
