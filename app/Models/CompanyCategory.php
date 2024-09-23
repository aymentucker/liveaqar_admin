<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'name_en', 'image', 'parent_id'];
    // public function category()
    // {
    //     return $this->hasMany(Company::class);
    // }

     // Relationship to parent category
     public function parent()
     {
         return $this->belongsTo(CompanyCategory::class, 'parent_id');
     }

     // Relationship to child categories
     public function children()
     {
         return $this->hasMany(CompanyCategory::class, 'parent_id');
     }

     // Companies that belong to this category
     public function companies()
     {
         return $this->belongsToMany(Company::class, 'company_company_category');
     }

}
