<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';
	protected $fillable = ['id_user_data','id_city', 'cep', 'street', 'number', 'neighborhood'];
}

