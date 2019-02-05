<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Collection;

use App\Models\Category;
use App\Models\ActivityHasCategory;

use App\Models\Activity;

use App\Models\Section;
use App\Http\Requests\Admin\CategoryFormRequest;
use Image;

class CategoryController extends Controller
{
   
    public function index()
    {
        $headers = ['title' => 'Etapas'];
        $categorys = Category::select('category.*', 'section.name as section')
                        ->join('section', 'section.id', '=', 'category.section_id')
                        ->orderBy('id','DESC')
                        ->take(999)
                        ->get();

        
        return view('admin.category.index', compact('headers', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function uploadFile(Request $request) {

        if ($request->hasFile('image')) {
               $destinationPath = 'uploads/category';
               $file = $request->image;
               $image_name = time().".".$file->getClientOriginalExtension();
                // 
               $file->move( $destinationPath, $image_name);
               $image = Image::make(sprintf('uploads/category/%s', $image_name))->resize(600, null, function($constraint){$constraint->aspectRatio();})->save();
                
               return ['status'=> 'success', 'image_name' => $image_name ];
        }
        else{
            unset($data['image']);
            return ['status'=> 'error'];

        }

    }

    public function create()
    {
        $headers = ['title' => 'Nova Etapa'];
        $sections = Section::pluck('name', 'id');
        return view('admin.category.create', compact('headers', 'sections'));
    }

 public function create_atv()
    {
        $headers = ['title' => 'Vincular Etapas com Atividades'];
        $categorys = Category::orderBy('name','asc')->get();
        $activitys = Activity::orderBy('description','asc')->get();


        return view('admin.category.create_atv', compact('headers', 'categorys','activitys'));
    }

    public function getCreate_atv($id)
    {
        $headers = ['title' => 'Vincular Etapas com Atividades'];
        $categorys = Category::where('id',$id)->orderBy('name','asc')->get();

        return $categorys;
        // return view('admin.category.create_atv', compact('headers', 'categorys'));
    }

     public function resetarCatActive(Request $request){
        

        $deletedRows = ActivityHasCategory::where('id_category', $request->idcat )->delete();

        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Activity Reset success.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Erro!', 'mensagem'=>'Error Activity Reset'];
        return ['status'=>'error', 'dados'=> $msg];
       
    }

    /** Cadastro
     */
    public function store(CategoryFormRequest $request)
    {
        
        $store = Category::create($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Etapa cadastrada.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Erro!', 'mensagem'=>'Erro ao cadastrar Etapa'];
        return ['status'=>'error', 'dados'=> $msg];
       
    }


     public function storeCatActive(Request $request, $id_catagory)
    {

        foreach($request->order as  $value) {
            $order[] = $value;
        }

        $category =  intval($id_catagory);
        // LIMPO AS ATIVIDADES DAQUELA Etapa
        $deletedRows = ActivityHasCategory::where('id_category',$category)->delete();

      
        // SALVO NOVAMENTE
        $i = 0;
        foreach($request->checkbox  as $value) {
            
            $store = ActivityHasCategory::create([ 'id_category' => $category ,
             'id_activity' => $value,
             'order' => $order[$i] ]);

            $i++;

        }
    
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Etapa e atividades vinculadas.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Erro!', 'mensagem'=>'Erro ao cvincular'];
        return ['status'=>'error', 'dados'=> $msg];
       
    }



   
   
    
    public function update(CategoryFormRequest $request, $id)
    {
       
        $store = Category::where('id',$request->id)->update($request->all());
        if($store){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Etapa atualizada.'];
            return ['status'=>'success', 'dados'=> $msg];
        }
        $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao atualizar Etapa, nenhum dado foi alterado.'];
        return ['status'=>'error', 'dados'=> $msg];
    }


    public function editAngular($id){
        $dados = Category::where('id', $id)->first();
        return  $dados ;
    }

    public function edit($id)
    {

        $headers = ['category' => 'Etapas', 'title' => 'Etapas'];
        $dados = Category::select('id', 'section_id')->where('id', $id)->first();
        $sections = Section::pluck('name', 'id');

        return view('admin.category.edit', compact('dados', 'headers', 'sections'));
        
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deletedRows = Category::where('id', $request->id)->delete();
        if($deletedRows){
            $msg = ['title' => 'Sucesso!', 'mensagem'=>'Seu registro foi excluído!'];
            return ['status'=>'success', 'dados'=> $msg];
        }
         $msg = ['title' => 'Avisso!', 'mensagem'=>'Erro ao deletar.'];
        return ['status'=>'error', 'dados'=> $msg];
    }
    
}
