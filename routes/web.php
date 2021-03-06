<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ScreenshotController;
use App\Http\Controllers\admin\TagsController;
use App\Http\Controllers\admin\App_detailController;
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


Route::get('/detail/{id}', [HomeController::class,'detail']);




//admin
Route::get('/admin', [HomeController::class,'admin']);

//category
Route::get('/admin/category', [CategoryController::class,'index']);
Route::get('/admin/delete_category/{id}', [CategoryController::class,'deleteCategory']);
Route::get('/admin/show_category/{id}', [CategoryController::class,'showCategory']);
Route::get('/admin/add_category', [CategoryController::class,'addCategory']);

Route::post('/admin/save_category', [CategoryController::class,'saveCategory']);
Route::post('/admin/update_category/{id}', [CategoryController::class,'updateCategory']);

//app_detail

Route::get('/admin/app_detail', [App_detailController::class,'index']);
Route::get('/admin/delete_app_detail/{id}', [App_detailController::class,'deleteApp_detail']);
Route::get('/admin/show_app_detail/{id}', [App_detailController::class,'showApp_detail']);
Route::get('/admin/add_app_detail', [App_detailController::class,'addApp_detail']);

Route::post('/admin/save_app_detail', [App_detailController::class,'saveApp_detail']);
Route::post('/admin/update_app_detail/{id}', [App_detailController::class,'updateApp_detail']);

//tags

Route::get('/autocomplete', [TagsController::class,'autocomplete'])->name('autocomplete');

Route::get('/admin/tags', [TagsController::class,'index']);
Route::get('/admin/delete_tags/{id}', [TagsController::class,'deleteTags']);
Route::get('/admin/show_tags/{id}', [TagsController::class,'showTags']);
Route::get('/admin/add_tags', [TagsController::class,'addTags']);

Route::post('/admin/save_tags', [TagsController::class,'saveTags']);
Route::post('/admin/update_tags/{id}', [TagsController::class,'updateTags']);

//Screenshot

Route::get('/admin/screenshot', [ScreenshotController::class,'index']);
Route::get('/admin/delete_screenshot/{id}', [ScreenshotController::class,'deleteScreenshot']);
Route::get('/admin/show_screenshot/{id}', [ScreenshotController::class,'showScreenshot']);
Route::get('/admin/add_screenshot', [ScreenshotController::class,'addScreenshot']);

Route::post('/admin/save_screenshot', [ScreenshotController::class,'saveScreenshot']);
Route::post('/admin/update_screenshot/{id}', [ScreenshotController::class,'updateScreenshot']);