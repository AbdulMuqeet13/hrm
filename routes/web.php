<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', [UserController::class,'index'])->name('user.index');
Route::get('/user/create', [UserController::class,'create'])->name('user.create');
Route::post('/user', [UserController::class,('store')])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class,('edit')])->name('user.edit');
Route::put('/user/{id}', [UserController::class,('update')])->name('user.update');
Route::delete('/user/{id}', [UserController::class,('destroy')])->name('user.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
