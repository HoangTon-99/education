<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function show(){
        return view('hoangton.signup');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'name' =>'required|min:6|max:30|alpha',
                'email' =>'required|email',
                'address' =>'required|min:5|max:300|',
                'phone' =>'required|size:10|numeric',
                'password' =>'required|confirmed|min:5|max:30',
            ]);
            if($validate->fails()){
                return redirect()->back()
                ->withErrors($validate);
                ->withInput();
            }
        }
    }
}
