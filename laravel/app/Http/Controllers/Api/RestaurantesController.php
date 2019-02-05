<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantesController extends Controller
{
    public function index() {
        return Restaurante::all();
    }
}
