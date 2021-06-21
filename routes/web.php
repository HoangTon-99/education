<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\CustomAuthController;

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

// Route::get('register', function () {
//    return view('hoangton.register');
// });
//  Route::get('register',[loginController::class, 'register']);
//  Route::post('register',[loginController::class, 'postregister']);
//  Route::get('logout',[loginController::class, 'logout']);

//  Route::get('/login', function () {
//    return view('hoangton.login');
// });
//  Route::get('/', 'UserController@show') -> name('hoangton.show');
//  Route::post('/', 'UserController@store') -> name('hoangton.post');
//  Route::get('/login', 'UserController@showlogin') -> name('hoangton.showlogin');


//  Route::get('json',[jsonController::class,'json']);
// Route::get('goi', [MyController::class, 'xinchao']);


// Route::post('upload', function (Request $request) {
    // logic xử lý upload file.
// });
// Route::get('json',[jsonController::class, 'json']);

// Route::get('/login',function(){
//     return view('hoangton.login');
// });
// Route::get('login', [loginController::class, 'login']);
// Route::post('login', [loginController::class, 'postlogin']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

