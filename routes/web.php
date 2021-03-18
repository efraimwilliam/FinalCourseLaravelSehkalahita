<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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


Route::get('/', function () {
    return view('Dashboard');
})->middleware('auth:2');

Route::prefix('/admin')->group(function (){

    //home
    Route::get('/a', [DashboardController::class, 'getjumlahbuku']);

    //role
    Route::get('/role', function(){
        return view('Role');
    });
    
    //buku
    Route::get('/buku', function(){
        return view('Buku');
    });

    Route::get('/tabelbuku', [DashboardController::class, 'getbuku']);

    //peminjaman

    
});



Route::get('/auth', [AuthController::class, 'loginpage']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [RegisterController::class, 'registerpage']);

Route::post('/daftar', [RegisterController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);





