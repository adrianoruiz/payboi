<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Http\Requests\Admin\ContentFormRequest;
use App\Models\UserData;

use DB;

class ContentController extends Controller
{
    
    // UTILIZADAS NA API
    public function listContents($category_id){
        $dados = Content::select('content.*', 'category.image as img_category' )
                        ->leftJoin('category', 'category.id', '=', 'content.category_id')
                        ->where('category_id', $category_id)
                        ->orderBy('content.order')
                        ->get();

        foreach ($dados as $key => $value) {
            $content = strip_tags($value->content); // Retira as tags HTML e PHP de uma string
            $content = str_replace("&nbsp;","", $content);

            if(strlen($content) > 5) {
                $dados[$key]->content = substr($content,0,100).'...';
            }            
            
        }

        return $dados; 
    }

    public function setview($id_post) {
        $qt = Content::select('view')->where('id',$id_post)->first();
        $soma = $qt->view + 1;


        Content::where('id',$id_post)->update(['view' => $soma]);
        
        return ['success' => 'sucesso'];
    }

    public function listContent($id){
        $dados = Content::select('content.*', 'category.name')
        
         ->leftJoin('category', 'category.id', '=', 'content.category_id')
          ->where('content.id', $id)
          ->orderBy('content.order')
         ->first();
        return $dados; 
    }


    public function searchContents($termo, $type='materias'){

        if($type == 'materias'){
             $sql = "select content.* from content 
            WHERE content.title 
            LIKE '%$termo%' or content.content
            LIKE '%$termo%' 
            ORDER by content.title asc limit 80";

            
        } else{
            // busca por fornecedores
             $sql = "   SELECT users.id, users.name, activity.description, users.avatar, users.email, 
                city.name as city, 
                city.id as id_city, 
                user_address.street, user_address.number, 
                user_address.neighborhood, state.uf, state.id as id_state 
                FROM user_data 
                LEFT JOIN users on users.id = user_data.id_user 
                LEFT JOIN user_address on user_address.id_user_data = user_data.id 
                LEFT JOIN city on city.id = user_address.id_city 
                LEFT JOIN state on state.id = city.state 
                INNER JOIN activity ON activity.id  = user_data.id_activity 
                WHERE users.name  LIKE '%$termo%' or 
                activity.description  LIKE '%$termo%'  ";
        }
       


        $dados = DB::select($sql);

         if($type == 'materias'){
            foreach ($dados as $key => $value) {
                $content = strip_tags($value->content); // Retira as tags HTML e PHP de uma string
                $dados[$key]->content = substr($content,0,100).'...';
                $dados[$key]->total = count($dados);
            }

        } else{
            foreach ($dados as $key => $value) {
                $dados[$key]->total = count($dados);
            }
        }


       

        return $dados; 
    }


}
