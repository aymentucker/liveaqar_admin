<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'title_en',
        'image',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
