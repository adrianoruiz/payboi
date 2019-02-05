<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;
use Hash;

class ForgotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forgot($token)
    {
        $user = User::where('remember_token', $token)->first();
        if($user){
            $valida = 1;
        }else{
            $valida = 2;
        }
        return view('site.forgotPassword', compact('token', 'valida'));



    }

    public function store(Request $request)
    {
        if( $request->password != $request->passwordConfirm ){
                return redirect()->back()->with('error', 'Senhas diferentes!');
        }else{
           
            if(strlen($request->password) > 3 ){
                $user = User::where('remember_token', $request->remember_token)->first();
                $user->password = Hash::make($request->password);
                if($user->save()){
                    $success = 'Sua senha foi alterada com sucesso!';
                    return redirect()->back()->with('success', 'Sua senha foi alterada com sucesso!');

                }else{
                    return redirect()->back()->with('error', 'Erro ao salvar sua senha por favor entre em contato pelo e-mail: contato@construacontatos.com.br');
                }
            }else{
                return redirect()->back()->with('error', 'Senha deve conter no minimo 4 letras ou números!');
            }
            
        }
        return $request->all();



    }

    
}
