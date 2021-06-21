<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    public function show(){
        return view('hoangton.register');
    }

    public function store(Request $request){
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'name' =>'required|min:6|max:30|alpha',
                'email' =>'required|email',
                'address' =>'required|min:5|max:300|',
                'phone' =>'required|min:10|numeric',
                'password' =>'required|confirmed|min:5|max:30',
                'confirmpass'=>'required|confirmed|min:5|max:30'
            ]);
            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        $user = DB::table('(users)')->where('email',$request->email)->first();
        if(!$user){
            $newUser = new User();
            $newUser ->name = $request->name;
            $newUser ->email = $request->email;
            $newUser ->address = $request->address;
            $newUser ->sex = $request->sex;
            $newUser ->phone = $request->phone;
            $newUser ->password = $request->password;
            $newUser ->save();
            return redirect()->route('hoangton.show')->with('message','Bạn đã tao tài khoản thành công,mời bạn đăng nhập');

        }else{
            return redirect()->route('hoangton.showlogin')->with('message','Tài khoản đã tồn tại mời bạn đăng nhập');
        }
        }
    }
    public function showlogin(){
        return view('hoangton.login');
    }
}
