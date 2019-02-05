<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Answer;
use App\Models\Question;


class EvaluationController extends Controller
{
   public function __construct(Request $request)
    {
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

    }
    // UTILIZADAS NA API
    public function getQuestion(){
        $data = Question::all();
        return $data;
    }

    public function setAnswer(Request $request){

        

         $valida = Answer::where('id_user',$request->id_user)
         ->where('id_question',$request->id_question)
         ->first();

         if($valida) {
            // se existe update
            $update = Answer::where('id_user', $request->id_user)
            ->where('id_question',$request->id_question)
            ->update(['evaluation' => $request->evaluation, 'comment' => $request->comment]);
            return ['status' => 'success', 'msg' => 'Avaliação adicionada com sucesso']; 


         } else {
            $create = Answer::create($request->all());
            return ['status' => 'success', 'msg' => 'Avaliação adicionada com sucesso']; 


         }


        return ['status' => 'error', 'msg' => 'Erro ao adicionar avaliação']; 
    	

    }

    // UTILIZADAS NA API
    public function getAnswer($id_user){
        $perguntas =  Question::all();

        $data = Answer::where('id_user', $id_user)->get();
        return ['total_respostas' => count($data), 'total_perguntas' => count($perguntas),'dados' =>  $data];
    }

}
