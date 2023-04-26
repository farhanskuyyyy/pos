<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
    return view('landing-page');
})->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::prefix('user')->name('user.')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user_id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{user_id}', [UserController::class, 'delete'])->name('delete');
        Route::put('/update-password', [UserController::class, 'update-password'])->name('update.password');
        Route::get('/user-list', [UserController::class, 'getUserList'])->name('user-list');
    });
});
