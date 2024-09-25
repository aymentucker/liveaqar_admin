<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'name_en', 'image', 'parent_id', 'user_id',];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
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
