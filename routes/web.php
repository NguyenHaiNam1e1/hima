<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Controller;

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


Route::get('/', [HomeController::class,'index']);


Route::get('/detail', [HomeController::class,'detail']);




//admin
Route::get('/admin', [HomeController::class,'admin']);

//category
Route::get('/admin/category', [CategoryController::class,'index']);
Route::get('/admin/delete_category/{id}', [CategoryController::class,'deleteCategory']);
Route::get('/admin/show_category/{id}', [CategoryController::class,'showCategory']);
Route::get('/admin/add_category', [CategoryController::class,'addCategory']);

Route::post('/admin/save_category', [CategoryController::class,'saveCategory']);
Route::post('/admin/update_category/{id}', [CategoryController::class,'updateCategory']);