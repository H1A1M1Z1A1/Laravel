<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use APP\Models\Category;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);
Route::get('/category',[AdminController::class,'category']);
Route::post('/addCategory',[AdminController::class,'addCategory']);
Route::get('/view_product',[AdminController::class,'product']);
Route::post('/addProduct',[AdminController::class,'addProduct']);
Route::get('/show_product',[AdminController::class,'show_product']);
Route::post('/addCart/{id}',[HomeController::class,'addCart']);













