<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UsersHasStep;


class UsersHasStepController extends Controller
{
     public function step(Request $request){

     	 $step = UsersHasStep::where('id_user', $request->id_user)->where('type', $request->type)->first();
     	if ($step) {
     		$step->update($request->all());
     		return ['status' => 'success', 'message' => 'Alterada a etapa do usuário'];
     	}else{
     		UsersHasStep::create($request->all());
     		return ['status' => 'success', 'message' => 'Incluida a etapa do usuário'];
     	}

        return ['status' => 'error', 'message' => 'errro ao salvar a etapa do usuário'];

    }
   
}