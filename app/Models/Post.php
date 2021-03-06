<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'caption',
        'tag',
        'post_image',
    ];

    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }
}
