<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FrontendController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[FrontendController::class,'index']);
Route::get('product',[FrontendController::class,'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




  Route::middleware(['auth', 'isAdmin'])->group(function(){
   
   Route::get('/dashboard','Admin\FrontendController@index');

   Route::get('product','Admin\ProductController@index');

   Route::get('add-product', 'Admin\ProductController@add');

   Route::post('insert-product','Admin\ProductController@insert');

   Route::get('edit-prod/{id}',[ProductController::class,'edit']);
   Route::put('update-product/{id}',[ProductController::class,'update']);
   Route::get('delete-product/{id}',[ProductController::class,'destroy']);

 


   	
   
});
