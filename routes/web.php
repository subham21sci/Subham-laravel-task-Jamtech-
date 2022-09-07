<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[AuthController::class, 'login']);
Route::post('/',[AuthController::class, 'createlogin']);
Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'registerValidate']);
Route::get('/next_reg_page/{id}',[AuthController::class, 'nextregPage']);
Route::post('/next_reg_page/{id}',[AuthController::class, 'nextregPageValidate']);




Route::group([ 'middleware' => ['admin']], function(){ 
    Route::get('/admin',[HomeController::class, 'index']);
    Route::get('/user-list',[HomeController::class, 'userList']);
    Route::get('/add-user-admin',[HomeController::class, 'addUser']);
    Route::post('/add-user-admin',[HomeController::class, 'addUserValidate']);

    Route::post('/user-active/{id}',[HomeController::class, 'userActive']);


    Route::get('/logout',[AuthController::class, 'logout']);
});