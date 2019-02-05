<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Activity;
use App\Models\Section;
use App\Http\Requests\Admin\ActivityFormRequest;



class ActivityController extends Controller
{
   
    public function index()
    {
        $headers = ['title' => 'Atividades'];
        $atividades = Activity::orderBy('id','DESC')->take(999)->get();
        
        return view('admin.activity.index', compact('headers', 'atividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = ['title' => 'Nova Atividade'];
        $sections = Section::pluck('name', 'id');

        return view('admin.activity.create', compact('headers', 'sections'));
    }


      public function uploadFile(Request $request) {

        if ($request->hasFile('image')) {
               $destinationPath = 'uploads/activity';
               $file = $request->image;
               $image_name = time().".".$file->getClientOriginalExtension();
                // 
               $file->move( $destinationPath, $image_name);
               $image = Image::make(sprintf('uploads/activity/%s', $image_name))->resize(600, null, function($constraint){$constraint->aspectRatio();})->save();
                
               return ['status'=> 'success', 'image_name' => $image_name ];
        }
        else{
            unset($data['image']);
            return ['status'=> 'error'];

        }

    }


    /** Cadastro
     */
    public function store(ActivityFormRequest $request)
    {
        
        $store = Activity::create($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Atividade cadastrada.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Erro!', 'mensagem'=>'Erro ao cadastrar Atividade'];
        return ['status'=>'error', 'dados'=> $msg];
       
    }
    
    public function update(ActivityFormRequest $request, $id)
    {
       
        $store = Activity::where('id',$request->id)->update($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Atividade atualizada.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Atividade, nenhum dado foi alterado.'];
        return ['status'=>'error', 'dados'=> $msg];
    }


    public function editAngular($id){
        $dados = Activity::where('id', $id)->first();
        return  $dados ;
    }

    public function edit($id)
    {

        $headers = ['category' => 'Atividades', 'title' => 'Atividades'];
        $dados = Activity::select('id', 'section_id')->where('id', $id)->first();
        $sections = Section::pluck('name', 'id');

        return view('admin.activity.edit', compact('dados', 'headers', 'sections'));
        
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deletedRows = Activity::where('id', $request->id)->delete();
        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Seu registro foi excluído!'];
            return ['status'=>'success', 'dados'=> $msg];
        }
         $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao deletar.'];
        return ['status'=>'error', 'dados'=> $msg];
    }

  
    
}
