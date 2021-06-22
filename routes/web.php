<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use app\http\controllers\FileUploadController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AdminController;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    $users = DB::table('users')->get();
    return view('hello', ['users' => $users]);
});

Route::get('upload',function(){
    return view('upload');
});
Route::post('upload',[UploadController::class,'index']);

/*đăng kí khóa học*/
/*Route::get('dangky',function(){
    return view('Registration');
});*/


/*Route::get('Registration',[AdminController::class,'create']);
Route::post('Registration',[AdminController::class,'store']);*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
