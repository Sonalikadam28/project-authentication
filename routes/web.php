<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
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

// Route::get('/categories', function () {
//     return view('admin.categories');
// })->name('categories');

Route::get('/admin/categories', [CategorieController::class,'showUser'])->name('categories');
// Route::get('/user/{id}', [CategorieController::class,'singleuser'])->name('view.user');
Route::post('/admin/addcategory', [CategorieController::class,'addCategory'])->name('addCategory');
Route::post('/admin/updatecategory/{id}', [CategorieController::class,'updateUser'])->name('updatepost.category');
Route::get('/admin/updatecategory/{id}', [CategorieController::class,'updateCategory'])->name('update.category');
Route::get('/admin/deletecategory/{id}', [CategorieController::class,'deleteCategory'])->name('delete.category');
// Route::view('newcategory','/admin.categories.addcategories');
Route::get('/admin/newcategory', [CategorieController::class,'newcategory'])->name('newcategory');
 



Route::get('/admin/products', [ProductController::class,'showProducts'])->name('products');
// Route::match(['get','post'],'/admin/addproducts/', [ProductController::class,'addProduct']);

Route::post('/admin/addproduct', [ProductController::class,'addProduct'])->name('addProduct');
Route::post('/admin/update/{id}', [ProductController::class,'updateUser'])->name('updatepost.product');
Route::get('/admin/updateproduct/{id}', [ProductController::class,'updateProduct'])->name('update.product');
Route::get('/admin/deleteproduct/{id}', [ProductController::class,'deleteUser'])->name('delete.product');
// Route::view('newproduct','/admin.products.addproducts');
Route::get('/admin/newproduct', [ProductController::class,'newproduct'])->name('newproduct');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/details', function () {
//     return view('user.product.details');
// })->name('details');


 
 Route::get('/listing/{id}', [App\Http\Controllers\HomeController::class,'listing'])->name('listing');
 Route::get('/detailpage/{id}', [App\Http\Controllers\HomeController::class,'details'])->name('details');
 Route::get('/admin/loginuser', [App\Http\Controllers\HomeController::class,'loginuser'])->name('loginuser');
//  Route::post('/admin/addloginuser', [App\Http\Controllers\HomeController::class,'addloginuser'])->name('addloginuser');
