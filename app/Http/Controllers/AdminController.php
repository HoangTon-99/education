<?php

namespace App\Http\Controllers;

use App\registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Registration');
    }

    public function store(Request $request)
    {
        $news = new News;
        $news->FirstName = $request->FirstName; 
        $news->LastName = $request->LastName;
        $news->Email = $request->Email;
        $news->Address = $request->Address;
        $news->Month = $request->Month;
        $news->Course = $request->Course;
        $news->save();
        return redirect()->action('AdminController@create');
    }
}
