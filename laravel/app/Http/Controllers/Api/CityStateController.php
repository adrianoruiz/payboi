<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;



// use App\Http\Requests\Admin\UserFormRequest;

class CityStateController extends Controller
{
    public function listState(){
        $dados = State::all();
        return $dados;
    }

    public function listCityByState($state_id){
        $dados = City::where('state', $state_id)->get();
        return $dados;
    }

}