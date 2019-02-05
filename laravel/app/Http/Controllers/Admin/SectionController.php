<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Http\Requests\Admin\SectionFormRequest;



class SectionController extends Controller
{
   
    public function index()
    {
        $headers = ['title' => 'Sessões'];
        $sections = Section::orderBy('id','DESC')->take(999)->get();
        
        return view('admin.section.index', compact('headers', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = ['title' => 'Nova Sessão'];
        return view('admin.section.create', compact('headers'));
    }


    /** Cadastro
     */
    public function store(SectionFormRequest $request)
    {
        
        $store = Section::create($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Sessão cadastrada.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Erro!', 'mensagem'=>'Erro ao cadastrar Sessão'];
        return ['status'=>'error', 'dados'=> $msg];
       
    }



   
   
    
    public function update(SectionFormRequest $request, $id)
    {
       
        $store = Section::where('id',$request->id)->update($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Sessão atualizada.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Sessão, nenhum dado foi alterado.'];
        return ['status'=>'error', 'dados'=> $msg];
    }


    public function editAngular($id){
        $dados = Section::where('id', $id)->first();
        return  $dados ;
    }

    public function edit($id)
    {

        $headers = ['category' => 'Sessões', 'title' => 'Sessões'];
        $dados = Section::select('id')->where('id', $id)->first();
        return view('admin.section.edit', compact('dados', 'headers'));
        
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deletedRows = Section::where('id', $request->id)->delete();
        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Seu registro foi excluído!'];
            return ['status'=>'success', 'dados'=> $msg];
        }
         $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao deletar.'];
        return ['status'=>'error', 'dados'=> $msg];
    }
    
}

