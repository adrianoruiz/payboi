<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Activity;
use App\Models\UserData;
use App\User;
use App\Models\ActivityHasCategory;
// use App\Http\Requests\Admin\ActivityFormRequest;



class ActivityController extends Controller
{
   
    // UTILIZADAS NA API
    public function listActivitys(){
        $dados = Activity::orderBy('activity.description')->get();
        return $dados;
    }



    public function listActivitysByCategory($idCategory){

        // listar todas
         if($idCategory == 0) {
            $dados = ActivityHasCategory::select('activity.id','activity.description')
            ->join('activity','activity.id','=','activity_has_category.id_activity')
            ->groupBy('activity.id','activity.description')
            ->orderBy('activity.description')

            ->get();
        }    
        else {

    	$dados = ActivityHasCategory::select('activity.id','activity.description', 'activity_has_category.order')
            ->leftjoin('activity','activity.id','=','activity_has_category.id_activity')
            ->where('activity_has_category.id_category', $idCategory)
            ->orderBy('activity_has_category.order')
            // ->orderBy('activity.description')
            ->get();
       }

        foreach($dados as $row){
            $row->pessoas = UserData::select('users.id','users.name', 'users.avatar', 'users.email', 'city.name as city', 'city.id as id_city', 'user_address.street', 'user_address.number', 'user_address.neighborhood', 'state.uf', 'state.id as id_state')
                ->join('users', 'users.id', '=', 'user_data.id_user')
                ->leftJoin('user_address', 'user_address.id_user_data', '=', 'user_data.id')
                ->leftJoin('city', 'city.id', '=', 'user_address.id_city')
                ->leftJoin('state', 'state.id', '=', 'city.state')
                ->where('user_data.id_activity', $row->id)
                ->get();
        }
        return $dados;

    }

    public function infoUser($idUser){

        // $users = UserData::select('users.id', 'users.avatar', 'users.email', 'users.name', 'user_data.cell_phone', 'user_data.site', 'user_data.history', 
        //     'user_data.id_activity', 'city.id as id_city', 'state.id as id_state',
        //     'city.name as city', 'activity.description as activity', 'user_address.street', 'user_address.number', 'user_address.neighborhood', 'state.uf')

        $users = UserData::select('users.id', 'users.avatar', 'users.email', 'users.name', 'user_data.cell_phone', 'user_data.site', 'user_data.id_activity', 'user_data.history', 'user_data.cnpj_cpf', 'user_data.nome_fantasia', 'user_data.type_person', 'city.name as city', 'activity.description as activity', 'user_address.street', 'user_address.number', 'user_address.neighborhood', 'user_address.cep', 'state.uf')
            ->join('users', 'users.id', '=', 'user_data.id_user')
            ->leftJoin('user_address', 'user_address.id_user_data', '=', 'user_data.id')
            ->leftJoin('city', 'city.id', '=', 'user_address.id_city')
            ->leftJoin('state', 'state.id', '=', 'city.state')
            ->leftJoin('activity', 'activity.id', '=', 'user_data.id_activity')
            ->where('user_data.id_user', $idUser)
            ->first();
            
        return $users;

    }
}
