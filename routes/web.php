<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::get('admin/login',[AdminController::class,'login_form'])->name('login.form');
Route::post('login-functionality',[AdminController::class,'login_functionality'])->name('login.functionality');
Route::group(['middleware'=>'admin'],function(){
    Route::get('logout',[AdminController::class,'logout'])->name('logout');
    Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
});

Route::get('/categories', function () {
    return view('admin.categories');
})->name('categories');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
