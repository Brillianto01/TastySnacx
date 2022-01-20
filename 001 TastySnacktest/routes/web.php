<?php

use App\Http\Controllers\detailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/snacks/category/{category_id}', [productController::class, 'viewCategory']);

Route::get('/snacks/{product_id}', [detailController::class, 'viewDetail']);

Route::get('/products/search', [productController::class, 'index']);
Route::get('/products/add', [productController::class, 'create']);
Route::post('/products/add', [productController::class, 'store']);

Route::get('/snack/tag/{tag_name}', [productController::class, 'tags']);

Route::get('/aboutUS', function () {
    return view('contact');
});

// Route::get('/profile', function () {
//     return view('profile');
// });
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/update', [ProfileController::class, 'edit']);
Route::post('/profile/update', [ProfileController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
