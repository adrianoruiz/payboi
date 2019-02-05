<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\UsersHasActivity;

use App\Models\UserData;
use App\Models\UserAddress;
use App\Models\City;
use Hash;
use Auth;
use App\Notifications\NewPass;

use Socialite;

use Mail;

class UsersController extends Controller
{


    // INICIO RECUPERAR SENHA
     private function generatePass($length = 6)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }

    public function resetAppPassword(User $user)
    {
        $newpass = $this->generatePass();

        $user->password = $newpass;
        $user->setRememberToken($this->generatePass(32) . time() . uniqid());
        $user->save();

        return $user->notify(new NewPass($newpass));
    }

    public function refreshPassword(User $user)
    {
        abort_unless($user,400,'Não foi encontado usuario');

        try {
            return response()->json($this->resetAppPassword($user));
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }

     public function recuperaSenha($email)
    {

        $user = User::where('email', $email)->first();
        
        if ($user) {
            if($user->remember_token == ''){
                $user->setRememberToken($this->generatePass(32) . time() . uniqid());
                $token = $user->remember_token;
            }else{
                $token = $user->remember_token;
            }
             
            if($user->save()){

                $email = $user->email;

                $dataEmail['name'] = $user->name;
                $dataEmail['token'] = $token;

                try {
                    Mail::send('formstemplates.forgotPassword', $dataEmail, function ($message) use ($email)  {  
                            $message->from('contato@construacontatos.com.br', 'Construa Contatos');
                            $message->to($email)->/*cc('email@construacontatos.com.br')->bcc('desenvolvimento@7cliques.com.br')->*/subject('Recuperação de Senha');
                    });
                   return ['status' => 'success', 'msg' => 'E-mail para recuperação de senha enviado com sucesso! Não se esqueça de olhar também na caixa de SPAM.'];
                } catch (Exception $e) {
                    return ['status' => 'error '.$e];
                    
                }
            }
            // $this->refreshPassword( $validar);
            // SALVAR TOKEN > ENVIAR EMAIL PESSOA > /recuperarSenha/654654564651
            
        }

        return ['status' => 'error', 'msg' => 'Email não cadastrado'];
    }
    // FIM RECUPEAR SENHA


    // ENVIA MENSAGEM AO CRIAR CONTA
    public function emailcriarconta($nome, $email)
    {

        $data = array(
            'nome' => $nome,
            'email' => $email
        );


        $mail = Mail::send('layouts.api.mailBody', $data, function ($message) use ($email) {

            $message->from('contato@menuplanet.com.br', $name = 'Menu Planet');
            $message->to($email)->cc('contato@menuplanet.com.br')
                ->subject('Contra criada com sucesso - Bem vindo ao Menu Planet');
        });


    }


     public function listUsersByActivitys($idActivity){

        $dados = UsersHasActivity::select('users.name')
            ->join('users','users.id','=','user_has_activity.id_user')
            ->where('user_has_activity.id_activity', $idActivity)
            ->get();

        return $dados;

    }

    public function store(Request $request){

        if(!isset($request['name']) || isset($request['name']) && $request['name'] == ""){
            return ['status'=>'error', 'msg'=> 'O Nome deve ser preenchido!'];
        }

        if(!isset($request['email']) || isset($request['email']) && $request['email'] == ""){
            return ['status'=>'error', 'msg'=> 'O E-mail deve ser preenchido!'];
        }

        if(isset($request['email'])){
            $result = User::where('email', $request['email'])->first();
            if($result){
                return ['status'=>'error', 'msg'=> 'E-mail já cadastrado!'];
            }
        }

        if(!isset($request['cell_phone']) || isset($request['cell_phone']) && $request['cell_phone'] == ""){
            return ['status'=>'error', 'msg'=> 'O Celular deve ser preenchido!'];
        }

        if(!isset($request['id_city']) || isset($request['id_city']) && $request['id_city'] == ""){
            return ['status'=>'error', 'msg'=> 'A cidade deve ser preenchida!'];
        }

        if(isset($request['name'])){ 
            $dataUser['name'] = $request['name'];
        }
        if(isset($request['email'])){ 
            $dataUser['email'] = $request['email'];
        }
        if(isset($request['role'])){ 
            $dataUser['role'] = $request['role'];
        }
        if(isset($request['status'])){ 
            $dataUser['status'] = $request['status'];
        }
        if(isset($request['password'])){ 
            $dataUser['password'] = Hash::make($request['password']);
        }

        if(isset($request['id_activity'])){ 
            $dataUserData['id_activity'] = $request['id_activity'];
        }
        if(isset($request['cell_phone'])){ 
            $dataUserData['cell_phone'] = $request['cell_phone'];
        }
        if(isset($request['site'])){ 
            $dataUserData['site'] = $request['site'];
        }
        if(isset($request['cnpj_cpf'])){ 
            $dataUserData['cnpj_cpf'] = $request['cnpj_cpf'];
        }
        if(isset($request['type_person'])){ 
            $dataUserData['type_person'] = $request['type_person'];
        }
        if(isset($request['nome_fantasia'])){ 
            $dataUserData['nome_fantasia'] = $request['nome_fantasia'];
        }
        if(isset($request['history'])){ 
            $dataUserData['history'] = $request['history'];
        }
        if(isset($request['cep'])){ 
            $dataUserAddress['cep'] = $request['cep'];
        }
        if(isset($request['street'])){ 
            $dataUserAddress['street'] = $request['street'];
        }
        if(isset($request['number'])){ 
            $dataUserAddress['number'] = $request['number'];
        }
        if(isset($request['neighborhood'])){ 
            $dataUserAddress['neighborhood'] = $request['neighborhood'];
        }
        if(isset($request['id_city']) && $request['id_city'] != ''){ 
            $dataUserAddress['id_city'] = $request['id_city'];
        }else{
             $dataUserAddress['id_city'] = 0;
        }

        try {
           $storeUser = User::create($dataUser);
            $dataUserData['id_user'] = $storeUser->id;
            $storeUserData = UserData::create($dataUserData);
            $dataUserAddress['id_user_data'] = $storeUserData->id;
            $storeUserAddress = UserAddress::create($dataUserAddress);
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Usuário Inserido.'];
            return ['status'=>'success', 'dados'=> $msg];
            
        } catch (Exception $e) {
            $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Usuário, nenhum dado foi alterado.'];
            return ['status'=>'error', 'dados'=> $msg];
        }
    }

    public function update(Request $request){

        // return $request->all();
        // 
        if(isset($request['avatar'])){ 
            $dataUser['avatar'] = $request['avatar'];
        } 

        if(!isset($request['name']) || isset($request['name']) && $request['name'] == ""){
            return ['status'=>'error', 'msg'=> 'O Nome deve ser preenchido!'];
        }

        if(!isset($request['email']) || isset($request['email']) && $request['email'] == ""){
            return ['status'=>'error', 'msg'=> 'O E-mail deve ser preenchido!'];
        }

        if(!isset($request['cell_phone']) || isset($request['cell_phone']) && $request['cell_phone'] == ""){
            return ['status'=>'error', 'msg'=> 'O Celular deve ser preenchido!'];
        }
       
        if(isset($request['name'])){ 
            $dataUser['name'] = $request['name'];
        }
        if(isset($request['email'])){ 
            $dataUser['email'] = $request['email'];
        }
        if(isset($request['role'])){ 
            $dataUser['role'] = $request['role'];
        }
        if(isset($request['password'])){ 
            $dataUser['password'] = Hash::make($request['password']);
        }

        if(isset($request['id_activity'])){ 
            $dataUserData['id_activity'] = intval($request['id_activity']);
        }
        if(isset($request['cell_phone'])){ 
            $dataUserData['cell_phone'] = $request['cell_phone'];
        }
        if(isset($request['telephone'])){ 
            $dataUserData['telephone'] = $request['telephone'];
        }
        if(isset($request['site'])){ 
            $dataUserData['site'] = $request['site'];
        }
        if(isset($request['cnpj_cpf'])){ 
            $dataUserData['cnpj_cpf'] = $request['cnpj_cpf'];
        }
        if(isset($request['type_person'])){ 
            $dataUserData['type_person'] = $request['type_person'];
        }
        if(isset($request['history'])){ 
            $dataUserData['history'] = $request['history'];
        }
        if(isset($request['nome_fantasia'])){ 
            $dataUserData['nome_fantasia'] = $request['nome_fantasia'];
        }

        if(isset($request['rz_social'])){ 
            $dataUserData['rz_social'] = $request['rz_social'];
        } 

        if(isset($request['i_company']) && $request['i_company'] == true){ 
            $i_company = true;
        }else{
            $i_company = false;
        }

        if(isset($request['id_user_data'])){ 
            $i_company = true;
            $id_user_data = $request['id_user_data'];
        }

        if(isset($request['history'])){ 
            $dataUserData['history'] = $request['history'];
        } 

        if(isset($request['cep'])){ 
            $dataUserAddress['cep'] = $request['cep'];
        }
        if(isset($request['street'])){ 
            $dataUserAddress['street'] = $request['street'];
        }
        if(isset($request['number'])){ 
            $dataUserAddress['number'] = $request['number'];
        }
        if(isset($request['neighborhood'])){ 
            $dataUserAddress['neighborhood'] = $request['neighborhood'];
        }
        if(isset($request['id_city']) && $request['id_city'] != ''){ 
            $dataUserAddress['id_city'] = $request['id_city'];
        }else{
             $dataUserAddress['id_city'] = 0;
        }

       

        try {
            if($i_company){

                if(isset($id_user_data)){
                    $dataUserData['company'] = 1;
                    $storeUserData = UserData::where('id',$id_user_data)->first();
                    $storeUserData->update($dataUserData);
                }else{
                    $dataUserData['id_user'] = $request->id;
                    $dataUserData['company'] = 1;
                    $storeUserData = UserData::create($dataUserData);
                }

                
            }else{
                $storeUser = User::where('id',$request->id)->update($dataUser);

                $storeUserData = UserData::where('id_user',$request->id)->where('company','0')->first();
                if($storeUserData){
                    $storeUserData->update($dataUserData);
                }else{
                    $dataUserData['id_user'] = $request->id;
                    $storeUserData = UserData::create($dataUserData);
                }
            }

            $storeUserAddress = UserAddress::where('id_user_data',$storeUserData->id)->first();
            if($storeUserAddress){
                $storeUserAddress->update($dataUserAddress);
            }else{
                $dataUserAddress['id_user_data'] = $storeUserData->id;
                UserAddress::create($dataUserAddress);
            }

              // // seta pessoa como fornecedor
              User::where('id',$request->id)->update(['role' =>'preParceiro']);

            
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Usuário atualizado.'];
            return ['status'=>'success', 'dados'=> $msg];
        } catch (Exception $e) {
            $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Usuário, nenhum dado foi alterado.'];
            return ['status'=>'error', 'dados'=> $msg];
        }
        
    }




     // FIM VALIDA CONTA POR SMS
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();

            if (Auth::user()->role == 'admin') {
                return view('admin.index');
            } else {
                return back()->withInput()->withErrors(['msg' => 'Clientes não tem permissão para acessar! ']);
            }
        }
        return back()->withInput()->withErrors(['msg' => 'Email ou senha incorretos']);
    }




    public function relogar($id_user, $token) {

        $user = User::where('id',$id_user)->first();
        $userAdrress = $this->userCityState($user->id);

        $user = $user->toArray();


        if($userAdrress){
            $user['id_city'] = $userAdrress->id_city;
            $user['id_state'] = $userAdrress->id_state;
        }

        
        return ['status' => 'success', 'msg' => 'Bem vindo', 'dados' => $user];
    }
    
    // login do app
    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();
            $userAdrress = $this->userCityState($user->id);

            $user = $user->toArray();

            if($userAdrress){
                $user['id_city'] = $userAdrress->id_city;
                $user['id_state'] = $userAdrress->id_state;
            }

            return ['status' => 'success', 'msg' => 'Bem vindo', 'dados' => $user];

        }

        return ['status' => 'error', 'msg' => 'Email ou senha incorretos'];
    }

    public function userCityState($id){
        $userAddress = UserAddress::select('user_address.id_city', 'city.state as id_state')
                                    ->join('user_data', 'user_data.id', '=', 'user_address.id_user_data')
                                    ->join('city', 'city.id', '=', 'user_address.id_city' )
                                    ->where('user_data.id_user', $id)
                                    ->first();
        return $userAddress;
    }


    public function cadastrar_facebook($dadosFacebook)
    {

        $existe = User::where('email', $dadosFacebook->email)->first();
        $password = 'facebook';

        if ($existe) {
            // se o e-mail exist ja logo
            Auth::loginUsingId($existe->id);


            $user = Auth::user();

               $update = User::where('id',$existe->id)->update([
                'name' => $dadosFacebook->name,
                'email' => $dadosFacebook->email,
                'password' => $password,
                'role' => 'client',
                'avatar' => $dadosFacebook->avatar
            ]);
            return ['status' => 'success', 'dados' => $user];

        } else {
            // senao eu crio
            $create = User::create([
                'name' => $dadosFacebook->name,
                'email' => $dadosFacebook->email,
                'password' => $password,
                'role' => 'client',
                'avatar' => $dadosFacebook->avatar
            ]);

            if ($create) {
                Auth::loginUsingId($create->id);
                $user = Auth::user();
                return ['status' => 'success', 'dados' => $user];
            }

        }

    }


    public function loginFacebook(Request $request)
    {


        $accessToken = $request->authResponse;


        // verificar o token no facebook

        if ($request->status == "connected") {
            $facebook = Socialite::driver('facebook');
             $userSocial = $facebook->userFromToken($accessToken['accessToken']);


             $ret = $this->cadastrar_facebook($userSocial);
            
            return $ret;
        

        } else {
            return ['status' => 'error', 'msg' => 'Erro ao se conectar'];
        }


        // criar usuario se não existe
        // retornar o token

    }

    


    public function cadastrar_user(Request $request)
    {

        if(!isset($request['name']) || ( isset($request['name']) && $request['name'] == "") ){
            return ['status'=>'error', 'msg'=> 'O Nome deve ser preenchido!'];
        }

        if(!isset($request['email']) || isset($request['email']) && $request['email'] == ""){
            return ['status'=>'error', 'msg'=> 'O E-mail deve ser preenchido!'];
        }

        if(!isset($request['cell_phone']) || isset($request['cell_phone']) && $request['cell_phone'] == ""){
            return ['status'=>'error', 'msg'=> 'O Celular deve ser preenchido!'];
        }

        if(!isset($request->id_city['id']) || isset($request->id_city['id']) && $request->id_city['id'] == ""){
            return ['status'=>'error', 'msg'=> 'A cidade deve ser preenchida!'];
        }


        $existe = User::where('email', $request->email)->first();

        $request->avatar = (isset($request->avatar) && $request->avatar != '') ? $request->avatar : 'http://construacontatos.com.br/uploads/avatar/padrao.png';

        if ($existe) {
            return ['status' => 'error', 'msg' => 'E-mail já cadastrado'];
        } else {
         
            $create = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'client',
                'avatar' => $request->avatar
            ]);



            if ($create) {

                 $create = UserData::create([ 
                    'cell_phone' => $request->cell_phone,
                    'id_user' => $create->id
                    ]);

                  $create = UserAddress::create([ 
                    'id_city' => $request->id_city['id'],
                    'id_user_data' => $create->id
                    ]);
                
                // enviar email de criar contato
                // $this->emailcriarconta($request->name, $request->email);

               
                Auth::loginUsingId($create->id);
                $user = Auth::user();

                return ['status' => 'success', 'dados' => $user];
            }

        }

    }

   
    ##################
    #### PERFIL DO USUARIO FOTO
    ##################


    public function base64_to_jpeg($base64_string, $user_id, $output_file)
    {

        $base64_string = "data:image/jpeg;base64," . $base64_string;
        $destination_folder = $_SERVER['DOCUMENT_ROOT'] . '/public' . $output_file;


        $ifp = fopen($destination_folder, 'wb');

        //Livrar-se de tudo até a última vírgula
        $base64_string = substr($base64_string, 1 + strrpos($base64_string, ','));

        fwrite($ifp, base64_decode($base64_string));
        fclose($ifp);

        return $output_file;
    }



    public function salvar_logomarca(Request $request)
    {


        $user_id = $request->user_id;
        $base64_string = $request->user_foto;
        $dinamico= $user_id.time();
        $output_file = "/uploads/avatar/logomarca-{$dinamico}.jpg";

        $salvar = $this->base64_to_jpeg($base64_string, $user_id, $output_file);
        
        if ($salvar) {
            $site = 'http://construacontatos.com.br';
            $update = UserData::where('id_user', $user_id)->update(['logomarca' => $site . $output_file]);
            return ['status' => 'success', 'imagem_url' => $salvar];
        }

        return ['status' => 'error', 'imagem_url' => ''];


    }


    public function salvar_foto(Request $request)
    {


        $user_id = $request->user_id;
        $base64_string = $request->user_foto;
        $dinamico= $user_id.time();
        $output_file = "/uploads/avatar/user-{$dinamico}.jpg";

        $salvar = $this->base64_to_jpeg($base64_string, $user_id, $output_file);
        
        if ($salvar) {
             $site = 'http://construacontatos.com.br';
            $update = User::where('id', $user_id)->update(['avatar' => $site . $output_file]);
            return ['status' => 'success', 'imagem_url' => $salvar];
        }

        return ['status' => 'error', 'imagem_url' => ''];


    }

    // unica diferenca para de cima é da o UPDATE
    public function editar_foto(Request $request)
    {

        $user_id = $request->user_id;
        $base64_string = $request->user_foto;
        $time = md5(time());
        $output_file = '/uploads/avatar/user-' . $time . '.jpg';

        $salvar = $this->base64_to_jpeg($base64_string, $user_id, $output_file);

        if ($salvar) {
            $site = 'http://construacontatos.com.br/';
            $update = User::where('id', $user_id)->update(['avatar' => $site . $output_file]);
            return ['status' => 'success', 'imagem_url' => $salvar];
        }

        return ['status' => 'error', 'imagem_url' => ''];


    }

   
}