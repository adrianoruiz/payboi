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

use Crypt;


use App\Http\Requests\Admin\FornecedorFormRequest;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
       
        $headers = ['title' => 'Parceiro'];
       
        $dados = User::where('role', 'fornecedor')->where('status', '<>', '-1')->get();

        return view('admin.fornecedor.index', compact('headers', 'dados'));
    }

    public function editAngular($id){
        $dados = User::select('users.*', 'user_data.cell_phone', 'user_data.id_activity', 'user_data.site', 'user_data.cnpj_cpf', 'user_data.nome_fantasia', 'user_data.type_person', 'user_address.id_city', 'user_address.cep', 'user_address.street', 'user_address.number')
                        ->join('user_data', 'user_data.id_user', '=', 'users.id')
                        ->join('user_address', 'user_address.id_user_data', '=', 'user_data.id')
                        ->where('users.id', $id)
            ->first();
        return  $dados ;
    }
   
    public function edit($id)
    {
        $headers = ['title' => 'Editar Parceiro'];
        
        $activity = Activity::orderBy('description')->pluck('description', 'id');


        $dados =$this->editAngular($id);

        $state = State::pluck('name', 'id');

         /* SELECIONA A CIDADE*/
        $citySelected = City::where('id', $dados->id_city)->first();
        if ($citySelected) {
            /* SELECIONA O ESTADO REFERENTE A CIDADE*/
            $stateSelected = State::select('id')->where('id', $citySelected->state)->first();
            /* ADICIONA O STATE AO ARRAY DE $DADOS POIS NÃO SALVA O ESTADO NO BANCO*/
            $dados->state = $stateSelected->id;
            /* SELECIONA AS CIDADE DE ACORDO COM O ESTADO */
            $citys = City::where('state', $citySelected->state)->pluck('name', 'id');
        }

        // dd($dados);
        return view('admin.fornecedor.edit', compact('headers', 'dados', 'citys', 'state', 'activity'));
    }

    public function create()
    {
        $headers = ['title' => 'Inserir Parceiro'];
        
        $activity = Activity::orderBy('description')->pluck('description', 'id');


        $state = State::pluck('name', 'id');

        return view('admin.fornecedor.create', compact('headers', 'activity', 'state'));
    }

    public function store(FornecedorFormRequest $request)
    {
        
        if(isset($request['name'])){ 
            $dataUser['name'] = $request['name'];
        }
        if(isset($request['avatar'])){ 
            $dataUser['avatar'] = $request['avatar'];
        }
        if(isset($request['email'])){ 
            $dataUser['email'] = $request['email'];
        }
        if(isset($request['status'])){ 
            $dataUser['status'] = $request['status'];
        }
        if(isset($request['role'])){ 
            $dataUser['role'] = $request['role'];
        }else{
            $dataUser['role'] = 'fornecedor';
        }
        if(isset($request['password'])){ 
            $dataUser['password'] = Hash::make($request['password']);
        }

        if(isset($request['id_activity']) && $request['id_activity'] != ''){ 
            $dataUserData['id_activity'] = $request['id_activity'];
        }else{
            $dataUserData['id_activity'] = 0;
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
        if(isset($request['nome_fantasia'])){ 
            $dataUserData['nome_fantasia'] = $request['nome_fantasia'];
        }
        if(isset($request['type_person'])){ 
            $dataUserData['type_person'] = $request['type_person'];
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
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Fornecedor Inserido.'];
            return ['status'=>'success', 'dados'=> $msg];
        } catch (Exception $e) {
            $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao inserir Fornecedor, nenhum dado foi alterado.'];
            return ['status'=>'error', 'dados'=> $msg];
        }
       
    }
   
  
    public function update(FornecedorFormRequest $request)
    {
         if(isset($request['name'])){ 
            $dataUser['name'] = $request['name'];
        }
        if(isset($request['avatar'])){ 
            $dataUser['avatar'] = $request['avatar'];
        }
        if(isset($request['email'])){ 
            $dataUser['email'] = $request['email'];
        }
        if(isset($request['status'])){ 
            $dataUser['status'] = $request['status'];
        }
        if(isset($request['role'])){ 
            $dataUser['role'] = $request['role'];
        }else{
            $dataUser['role'] = 'fornecedor';

        }
        if(isset($request['password'])){ 
            $dataUser['password'] = Hash::make($request['password']);
        }

        if(isset($request['id_activity']) && $request['id_activity'] != ''){ 
            $dataUserData['id_activity'] = $request['id_activity'];
        }else{
            $dataUserData['id_activity'] = 0;
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
        if(isset($request['nome_fantasia'])){ 
            $dataUserData['nome_fantasia'] = $request['nome_fantasia'];
        }
        if(isset($request['type_person'])){ 
            $dataUserData['type_person'] = $request['type_person'];
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
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Fornecedor atualizado.'];
            return ['status'=>'success', 'dados'=> $msg];
        } catch (Exception $e) {
            $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Fornecedor, nenhum dado foi alterado.'];
            return ['status'=>'error', 'dados'=> $msg];
        }
        
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deletedRows = User::where('id', $request->id)->update(['status'=>'-1']);
        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Seu registro foi excluído!'];
            return ['status'=>'success', 'dados'=> $msg];
        }
         $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao deletar.'];
        return ['status'=>'error', 'dados'=> $msg];
    }


    
   
}