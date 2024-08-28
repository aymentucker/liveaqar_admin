<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_en',
        'description',

        'description_en',
        'image',
        'url',
        'start_date',
        'end_date',
    ];
}
