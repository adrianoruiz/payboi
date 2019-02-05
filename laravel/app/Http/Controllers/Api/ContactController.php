<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;



class ContactController extends Controller
{
	 public function __construct(Request $request)
    {
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

    }
    
     public function sendMail(Request $request){
        $email = $request->email;

        $dataEmail = $request->all();

        try {
            Mail::send('formstemplates.contact', $dataEmail, function ($message) use ($email)  {  
                    $message->from($email, 'Construa Contatos');
                    $message->to('contato@construacontatos.com.br')/*->cc('contato@construacontatos.com.br')*//*->bcc('desenvolvimento@7cliques.com.br')*/->subject('Contato - Site');
            });
           return ['status' => 'success'] ;
        } catch (Exception $e) {
            return ['status' => 'error '.$e];
            
        }

    }
   
}