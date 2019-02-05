<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityHasCategory extends Model
{
    protected $table = 'activity_has_category';
    protected $fillable = ['id_category', 'id_activity','order'];

    public $timestamps = false;
}
