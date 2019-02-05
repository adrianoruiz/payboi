<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersHasActivity extends Model
{
    protected $table = 'user_has_activity';
    protected $fillable = ['id_user', 'id_activity'];

    public $timestamps = false;
}
