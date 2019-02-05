<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Section;


use App\Http\Requests\Admin\UserFormRequest;

class SectionController extends Controller
{
     public function listSections(){

        $dados = Section::all();

        return $dados;

    }
   
}