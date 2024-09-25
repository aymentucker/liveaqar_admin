<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'title',
        'content',
        'title_en',
        'content_en',
        'rating',
        'email',
        'visibility',

    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
