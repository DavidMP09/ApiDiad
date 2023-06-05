<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiDiadController extends Controller
{
    public function hola(){
        return response()->json(['message'=>'Hola Mundo']);
    }
}
