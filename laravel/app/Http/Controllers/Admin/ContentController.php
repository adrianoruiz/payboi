<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Category;
use App\Models\Answer;
use App\Models\Content;
use App\Http\Requests\Admin\ContentFormRequest;

use Image;
use File;

class ContentController extends Controller
{
   
    public function index()
    {
        $headers = ['title' => 'Conteúdos'];
        $contents = Content::select('content.*','category.name as category','section.name as section')
                            ->leftJoin('category', 'category.id', '=', 'content.category_id')
                            ->leftJoin('section', 'section.id', '=', 'category.section_id')
                            ->orderBy('content.order')
                            ->take(999)->get();

        foreach ($contents as $key => $row) {
            $row->ruim = Answer::where('id_question', $row->id)->where('evaluation', 1)->get()->count();
            $row->regular = Answer::where('id_question', $row->id)->where('evaluation', 2)->get()->count();
            $row->bom = Answer::where('id_question', $row->id)->where('evaluation', 3)->get()->count();
        }
        
        return view('admin.content.index', compact('headers', 'contents'));
    }



    public function uploadFile(Request $request) {

       
        if ($request->hasFile('image')) {
               $destinationPath = 'uploads/conteudos';
               $file = $request->image;
               $image_name = time().".".$file->getClientOriginalExtension();
                // 
                $file->move( $destinationPath, $image_name);
                $image = Image::make(sprintf('uploads/conteudos/%s', $image_name))->resize(600, null, function($constraint){$constraint->aspectRatio();})->save();
                
                return ['status'=> 'success', 'image_name' => $image_name ];
        }
            else{
                unset($data['image']);
                return ['status'=> 'error'];

            }
               

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = ['title' => 'Nova Conteúdo'];
        $sections = Section::orderBy('name')->pluck('name', 'id');
        $categorys = Category::orderBy('name')->pluck('name', 'id');
        return view('admin.content.create', compact('headers', 'sections', 'categorys'));
    }

    public function edit($id)
    {
        $headers = ['Content' => 'Conteúdos', 'title' => 'Conteúdos'];
        
        $dados = Content::select('content.*','category.section_id')
                            ->leftJoin('category', 'category.id', '=', 'content.category_id')
                            ->where('content.id', $id)
                            ->first();

        $sections = Section::orderBy('name')->pluck('name', 'id');
        $categorys = Category::orderBy('name')->pluck('name', 'id');


        return view('admin.content.edit', compact('dados', 'headers', 'sections', 'categorys'));
        
    }


    /** Cadastro
     */
    public function store(ContentFormRequest $request)
    {
        $request['slug_title'] = str_slug($request->title);
        $store = Content::create($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Conteúdo cadastrado.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Erro!', 'mensagem'=>'Erro ao cadastrar Conteúdo'];
        return ['status'=>'error', 'dados'=> $msg];
       
    }
   
    
    public function update(ContentFormRequest $request)
    {


        $request['slug_title'] = str_slug($request->title);
        $store = Content::where('id',$request->id)->update($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Conteúdo atualizado.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Conteúdo, nenhum dado foi alterado.'];
        return ['status'=>'error', 'dados'=> $msg];
    }


    public function editAngular($id){
        $dados = Content::where('id', $id)->first();
        return  $dados ;
    }

    

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deletedRows = Content::where('id', $request->id)->delete();
        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Seu registro foi excluído!'];
            return ['status'=>'success', 'dados'=> $msg];
        }
         $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao deletar.'];
        return ['status'=>'error', 'dados'=> $msg];
    }
    
    public function get_category($section_id){
        $result = Category::where('section_id', $section_id)->get();
        return $result;
    }
   
}
