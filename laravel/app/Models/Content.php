<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    protected $fillable = ['category_id', 'image', 'youtube_link', 'title', 'slug_title', 'content', 'thumb_youtube', 'order'];
}