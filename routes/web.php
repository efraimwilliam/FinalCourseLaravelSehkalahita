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


Route::prefix('/')->middleware('auth', 'role:user', 'role:admin')->group( function () {
    



});

Route::prefix('/admin')->middleware('auth', 'role:admin')->group(function (){

    //home
    Route::get('/a', [DashboardController::class, 'getjumlahbuku']);


    //role
    Route::get('/role', [DashboardController::class, 'getrole']);

    Route::get('/createrolepage', [DashboardController::class, 'createrolepage']);

    Route::post('/createrole', [DashboardController::class, 'createrole']);

    Route::get('/updaterolepage', [DashboardController::class, 'updaterolepage']);

    Route::post('/updaterole', [DashboardController::class, 'updaterole']);
    

    //buku
    Route::get('/buku', [DashboardController::class, 'getbuku']);

    Route::post('/bukupage', [DashboardController::class, 'createbuku']);

    Route::get('/createbukupage', [DashboardController::class, 'createbukupage']);

    Route::post('/createbuku', [DashboardController::class, 'createbuku']);

    Route::get('/updatebukupage', [DashboardController::class, 'updatebukupage']);

    Route::post('/updatebuku', [DashboardController::class, 'updatebuku']);


    //peminjaman
    Route::get('/peminjaman', [DashboardController::class, 'getpeminjaman']);

    Route::get('/createpeminjamanpage', [DashboardController::class, 'createpeminjamanpage']);

    Route::post('/createpeminjaman', [DashboardController::class, 'createpeminjaman']);
    
});


//Auth
Route::get('/auth', [AuthController::class, 'loginpage']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [RegisterController::class, 'registerpage']);

Route::post('/daftar', [RegisterController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);





