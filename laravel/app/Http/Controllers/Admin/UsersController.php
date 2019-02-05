<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\State;
use App\Models\City;
use App\Models\UserData;
use App\Models\Activity;
use App\Models\UserAddress;
use Hash;
use Image;

use Crypt;


use App\Http\Requests\Admin\UserFormRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
       
        $headers = ['title' => 'Usuário'];
       
        

         $dados = User::select('users.id', 'users.name', 'users.email', 'users.role',
            'users.avatar', 'user_data.cell_phone', 'user_data.telephone', 'user_data.cnpj_cpf', 'user_data.rg', 'user_data.rg', 'city.name as city')
            ->leftJoin('user_data', 'user_data.id_user', '=', 'users.id')
            ->leftJoin('user_address', 'user_address.id_user_data', '=', 'user_data.id')
            ->leftJoin('city', 'city.id', '=', 'user_address.id_city')
            ->where('users.role', 'admin')
            ->get();

        return view('admin.users.index', compact('headers', 'dados'));
    }

    public function editAngular($id){
         $dados = User::select('users.id', 'users.name', 'users.email', 'users.role', 'users.avatar', 'user_data.cell_phone', 'user_data.id_activity', 'user_data.site', 'user_data.cnpj_cpf', 'user_data.nome_fantasia', 'user_address.id_city', 'user_address.cep', 'user_address.street', 'user_address.number')
                        ->join('user_data', 'user_data.id_user', '=', 'users.id')
                        ->leftJoin('user_address', 'user_address.id_user_data', '=', 'user_data.id')
                        ->where('users.id', $id)
            ->first();
        return  $dados ;
    }
   
    public function edit($id)
    {
        $headers = ['title' => 'Editar Usuário'];

        $dados =$this->editAngular($id);

        $state = State::pluck('name', 'id');

         /* SELECIONA A CIDADE*/
         // dd($dados);

        if(isset($dados->id_city) && $dados->id_city != null){ 
            $citySelected = City::where('id', $dados->id_city)->first();
            if ($citySelected) {
                /* SELECIONA O ESTADO REFERENTE A CIDADE*/
                $stateSelected = State::select('id')->where('id', $citySelected->state)->first();
                /* ADICIONA O STATE AO ARRAY DE $DADOS POIS NÃO SALVA O ESTADO NO BANCO*/
                $dados->state = $stateSelected->id;
                /* SELECIONA AS CIDADE DE ACORDO COM O ESTADO */
                $citys = City::where('state', $citySelected->state)->pluck('name', 'id');
            }
        }

        // dd($dados);

          
        return view('admin.users.edit', compact('headers', 'dados', 'citys', 'state'));
    }

    public function create()
    {
        $headers = ['title' => 'Inserir Usuário'];
        

        $state = State::pluck('name', 'id');

        return view('admin.users.create', compact('headers', 'activity', 'role', 'state'));
    }

    public function store(UserFormRequest $request)
    {
        if(isset($request['avatar'])){ 
            $dataUser['avatar'] = $request['avatar'];
        } 

        if(isset($request['name'])){ 
            $dataUser['name'] = $request['name'];
        }
        if(isset($request['email'])){ 
            $dataUser['email'] = $request['email'];
        }
        if(isset($request['role'])){ 
            $dataUser['role'] = $request['role'];
        }else{
            $dataUser['role'] = 'admin';

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
   
  
    public function update(UserFormRequest $request)
    {

        if(isset($request['avatar'])){ 
            $dataUser['avatar'] = $request['avatar'];
        } 
         if(isset($request['name'])){ 
            $dataUser['name'] = $request['name'];
        }
        if(isset($request['email'])){ 
            $dataUser['email'] = $request['email'];
        }
        if(isset($request['role'])){ 
            $dataUser['role'] = $request['role'];
        }else{
            $dataUser['role'] = 'admin';

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
        if(isset($request['id_city']) && $request['id_city'] != ''){ 
            $dataUserAddress['id_city'] = $request['id_city'];
        }else{
             $dataUserAddress['id_city'] = 0;
        }

        try {
            $storeUser = User::where('id',$request->id)->update($dataUser);

            $storeUserData = UserData::where('id_user',$request->id)->first();
            if($storeUserData){
                $storeUserData->update($dataUserData);
            }else{
                $dataUserData['id_user'] = $storeUser->id;
                $storeUserData->create($dataUserData);
            }
            

            $storeUserAddress = UserAddress::where('id_user_data',$storeUserData->id)->first();
            if($storeUserAddress){
                $storeUserAddress->update($dataUserAddress);
            }else{
                $dataUserAddress['id_user_data'] = $storeUserData->id;
                UserAddress::create($dataUserAddress);
            }
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Usuário atualizado.'];
            return ['status'=>'success', 'dados'=> $msg];
        } catch (Exception $e) {
            $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Usuário, nenhum dado foi alterado.'];
            return ['status'=>'error', 'dados'=> $msg];
        }
        
    }  

    public function saveAvatar(Request $request)
    {

        // return $request->all();
        if ($request->hasFile('avatar')) {
            $site = 'http://construacontatos.com.br';
            $destinationPath = 'uploads/avatar';
            $file            = $request->avatar;
            $image_name      = time() . "." . $file->getClientOriginalExtension();
            //
            $file->move($destinationPath, $image_name);
            $image = Image::make(sprintf('uploads/avatar/%s', $image_name))->resize(180, 180, function ($constraint) {$constraint->aspectRatio();})->save();

            return ['status' => 'success', 'image_name' => $site . '/uploads/avatar/' . $image_name];
        } else {

            return ['status' => 'error'];

        }

    }


    
    public function destroy(Request $request)
    {
        $deletedRows = User::where('id', $request->id)->delete();
        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Seu registro foi excluído!'];
            return ['status'=>'success', 'dados'=> $msg];
        }
         $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao deletar.'];
        return ['status'=>'error', 'dados'=> $msg];
    }



    
   
}