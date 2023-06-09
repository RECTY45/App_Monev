<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('/login')->group(function () {
    Route::controller(LoginController::class)->group(function (){
        route::get('/','login')->name('login.index');
    });
});
Route::get('/', function () {
    return redirect('/login');
});
Route::group(['prefix' => 'dashboard'],function (){
    route::get('/',[DashController::class,'dash'])->name('dash.index');
});