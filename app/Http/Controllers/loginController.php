<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('hoangton.login');
    }
    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:32',
        ],[
            'email.required'=>'Bạn Chưa nhập email',
            'email.email'=>'Email chưa đúng định dạng',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password phải ít nhất 6 ký tự',
            'password.max'=>'Password không quá 32 ký tự'
        ]);
        $remember=$request->has('remember') ? true : false;
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password],$remember)){
            return redirect('/');
        } else{
            return redirect()->back()->with('thongbao','Đăng nhập thất bại');
        }
    }
}
