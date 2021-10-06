<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;

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


Route::prefix('/user')->middleware('auth', 'role:user')->group( function () {

    //home
    Route::get('/a', [DashboardUserController::class, 'getjumlahbuku']);

    //buku
    Route::get('/buku', [DashboardUserController::class, 'getbuku']);

    Route::get('/lihatbukupage/{id}', [DashboardUserController::class, 'lihatbukupage']);

    //peminjaman
    Route::get('/peminjaman', [DashboardUserController::class, 'getpeminjaman']);

    Route::get('/lihatpeminjamanpage/{id}', [DashboardUserController::class, 'lihatpeminjamanpage']);




});

Route::prefix('/admin')->middleware('auth', 'role:admin')->group(function (){

    //home
    Route::get('/a', [DashboardController::class, 'getjumlahbuku']);

    //buku
    Route::get('/buku', [DashboardController::class, 'getbuku']);

    Route::post('/bukupage', [DashboardController::class, 'createbuku']);

    Route::get('/createbukupage', [DashboardController::class, 'createbukupage']);

    Route::post('/createbuku', [DashboardController::class, 'createbuku']);

    Route::get('/updatebukupage/{id}', [DashboardController::class, 'updatebukupage']);

    Route::put('/updatebuku/{id}', [DashboardController::class, 'updatebuku']);

    Route::delete('/deletebuku/{id}', [DashboardController::class, 'deletebuku']);
    
    Route::get('/lihatbukupage/{id}', [DashboardController::class, 'lihatbukupage']);


    //role
    Route::get('/role', [DashboardController::class, 'getrole']);

    Route::get('/createrolepage', [DashboardController::class, 'createrolepage']);

    Route::post('/createrole', [DashboardController::class, 'createrole']);

    Route::get('/updaterolepage/{id}', [DashboardController::class, 'updaterolepage']);

    Route::put('/updaterole/{id}', [DashboardController::class, 'updaterole']);

    Route::delete('/deleterole/{id}', [DashboardController::class, 'deleterole']);
    

    //peminjaman
    Route::get('/peminjaman', [DashboardController::class, 'getpeminjaman']);
    
    Route::get('/createpeminjamandpage/{id}', [DashboardController::class, 'createpeminjamanpage']);

    Route::post('/createpeminjaman', [DashboardController::class, 'createpeminjaman']);

    Route::get('/updatepeminjamanpage/{id}', [DashboardController::class, 'updatepeminjamanpage']);

    Route::put('/updatepeminjaman/{id}', [DashboardController::class, 'updatepeminjaman']);

    Route::delete('/deletepeminjaman/{id}', [DashboardController::class, 'deletepeminjaman']);

    Route::get('/lihatpeminjamanpage/{id}', [DashboardController::class, 'lihatpeminjamanpage']);
    
   
});


//Auth
Route::get('/auth', [AuthController::class, 'loginpage']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [RegisterController::class, 'registerpage']);

Route::post('/daftar', [RegisterController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);





