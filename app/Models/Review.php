<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'rating',
        'email',
        'visibility',
        'display_location',
    ];

    protected $casts = [
        'display_location' => 'array',
    ];
}
