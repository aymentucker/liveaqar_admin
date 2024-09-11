<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'title',
        'content',
        'title_en',
        'content_en',
        'rating',
        'email',
        'visibility',
        'display_location',
    ];

    protected $casts = [
        'display_location' => 'array',
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

}
