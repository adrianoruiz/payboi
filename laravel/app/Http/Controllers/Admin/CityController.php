<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;

use Response;



class CityController extends Controller
{
   
    public function getCitiesByState($id)
    {
       $comarca = City::where('state','=', $id)
          ->orderBy('name','asc')
          ->get();
        return Response::json($comarca);
    }
}

