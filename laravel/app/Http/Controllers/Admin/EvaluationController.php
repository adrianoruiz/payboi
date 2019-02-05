<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Answer;



class EvaluationController extends Controller
{
   
   public function dateBR($date)
    {
        $result = date('d/m/Y H:i', strtotime($date));
        return $result;
    }

    public function dateUS($date)
    {
        $result = date('Y/m/d H:i', strtotime($date));
        return $result;
    }

    public function index()
    {


        $headers = ['title' => 'Avaliações'];
        $answer = Answer::select('answer.*','users.avatar', 'users.name','content.title' )
        ->join('users', 'users.id', '=' ,'answer.id_user' )
        ->join('content', 'content.id' ,'=', 'answer.id_question')

        ->orderBy('answer.id','DESC')
        ->take(500)->get();

        foreach ($answer as $key => $value) {
            $value->data_pt = $this->dateUS($value->created_at);
        }
       // dd($answer->toArray());
        
        return view('admin.evaluation.index', compact('headers', 'answer'));
    }

    public function evaluationPost($id)
    {


        $headers = ['title' => 'Avaliações'];
        $answer = Answer::select('answer.*','users.avatar', 'users.name','content.title' )
        ->join('users', 'users.id', '=' ,'answer.id_user' )
        ->join('content', 'content.id' ,'=', 'answer.id_question')
        ->where('answer.id_question', '=', $id)
        ->orderBy('answer.id','DESC')
        ->take(500)->get();

        foreach ($answer as $key => $value) {
            $value->data_pt = $this->dateBR($value->created_at);
        }
       // dd($answer->toArray());
        
        return view('admin.evaluation.index', compact('headers', 'answer'));
    }
}