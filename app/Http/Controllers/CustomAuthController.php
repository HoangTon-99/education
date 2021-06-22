<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('hoangton.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required|min:5|max:30',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("")->intended('index')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    // public function registration()
    // {
    //     return view('hoangton.register');
    // }


    // public function customRegistration(Request $request)
    // {
    //     $request->validate([
    //         'name' =>'required|min:6|max:30|alpha',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|max:30|confirmed',


    //         'phone' =>'required|min:10|numeric',
    //         'address' =>'required|min:5|max:50',

    //     ]);

    //     $data = $request->all();
    //     $check = $this->create($data);

    //     return redirect("layouts.master")->withSuccess('You have signed-in');
    // }


    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password']),

    //     'phone' => $data['phone'],
    //     'address' => $data['address'],
    //   ]);
    // }


    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('layouts.master');
    //     }

    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }


    // public function signOut() {
    //     Session::flush();
    //     Auth::logout();

    //     return Redirect('login');
    // }
    public function registration()
    {
        return view('hoangton.register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}

?>
