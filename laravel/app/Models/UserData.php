<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';
	protected $fillable = ['id_user','id_activity', 'cell_phone', 'site', 'cnpj_cpf', 'telephone', 'rg', 'nome_fantasia', 'rz_social', 'type_person', 'history', 'company', 'logomarca'];
}
