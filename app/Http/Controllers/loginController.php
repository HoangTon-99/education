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
            return redirect('/')->with('thongbao','dang nhap thanh cong');
        } else{
            return redirect()->back()->with('thongbao','Đăng nhập thất bại');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function register(){
        return view('hoangton.register');
    }
    public function postregister(Request $request){
        $request->validate([
            'name' =>'required|min:6|max:30|alpha',
            'email' =>'required|email',
            'address' =>'required|min:5|max:300|',
            'phone' =>'required|min:10|numeric',
            'password' =>'required|confirmed|min:5|max:30',
            'confirmpass'=>'required|confirmed|min:5|max:30'
        ]);
        $remember=$request->has('remember') ? true : false;
        if(Auth::attempt(['name'=>$request->name,'email'=>$request->email,'address'=>$request->address,'phone'=>$request->phone, 'password'=>$request->password,'confirmpass'=>$request->confirmpass],$remember)){
            return redirect('/')->with('thongbao','Đăng kí Thành Công');
        } else{
            return redirect()->back()->with('thongbao','Đăng Kí thất bại');
        }
    }
}
