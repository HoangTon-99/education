<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    // public function json(){
    //     return response()->json([
    //     'name'=>'anonymous',
    //     ]);
    //     }


    public function json(){
        return response()->json([
            'class'=>'anonymous',
            'group'=>'BK02'
        ]);
    }
}
