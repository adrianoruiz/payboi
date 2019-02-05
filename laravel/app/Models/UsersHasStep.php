<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersHasStep extends Model
{
    protected $table = 'users_has_step';
    protected $fillable = ['id_user', 'id_category', 'step', 'idx', 'type'];
}
