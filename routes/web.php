<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersdetailController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/userdetail', [UsersdetailController::class,'index'])->name('userdetail.index');
Route::get('/userdetail/create', [UsersdetailController::class,'create'])->name('userdetail.create');
Route::post('/userdetail', [UsersdetailController::class,('store')])->name('userdetail.store');
Route::get('/userdetail/{id}/edit', [UsersdetailController::class,('edit')])->name('userdetail.edit');
Route::put('/userdetail/{id}', [UsersdetailController::class,('update')])->name('userdetail.update');
Route::delete('/userdetail/{id}', [UsersdetailController::class,('destroy')])->name('userdetail.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
