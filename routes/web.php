<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PropertiController;
use App\Models\Properti;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SessionController::class, 'index']);
Route::get('/register',[SessionController::class, 'register']);
Route::get('/client',[SessionController::class, 'login']);
Route::get('/kost',[SessionController::class, 'kost']);
Route::get('/kontrakan',[SessionController::class, 'kontrakan']);
Route::get('/home',[SessionController::class, 'login']);
Route::get('/',[SessionController::class, 'index']);

// Route::get('/admin',[AdminController::class, 'index']);
// Route::get('/form',[AdminController::class, 'create']);

Route::resource('admin', AdminController::class);
Route::resource('properti', PropertiController::class);



