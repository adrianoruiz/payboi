<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answer';
    protected $fillable = ['id_user', 'id_question', 'comment','evaluation'];
}
