<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Category;


use App\Http\Requests\Admin\UserFormRequest;

class CategoryController extends Controller
{
     public function listCategoryBySection($section_id){

        $dados = Category::where('section_id', $section_id)
        ->orderBy('order','ASC')
        ->get();

        return $dados;

    }

    public function listCategory($category_id){

        $dados = Category::where('id', $category_id)->first();

        return $dados;

    }
   
}