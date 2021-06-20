<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('hoangton.index');
});

Route::get('signup', function () {
   return view('hoangton.signup');
});
//  Route::get('/show',[UserController::class, 'show']);
//  Route::post('/store',[UserController::class, 'store']);

//  Route::get('/login', 'UserController@show');
//  Route::post('/login', 'UserController@store');
//json
//  Route::get('json',[jsonController::class,'json']);
// Route::get('goi', [MyController::class, 'xinchao']);


// Route::post('upload', function (Request $request) {
    // logic xử lý upload file.
// });
// Route::get('json',[jsonController::class, 'json']);

Route::get('login',function(){
    return view('hoangton.login');
});
Route::get('login', [loginController::class, 'login']);
Route::post('login', [loginController::class, 'postlogin']);

