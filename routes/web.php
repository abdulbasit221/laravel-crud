<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'showUser'])->name('home');

Route::get('/user/{id}', [UserController::class, 'SingleUser'])->name('view.user');

Route::post('/add', [UserController::class,'AddUser'])->name('addUser');

Route::post('/update/{id}',  [UserController::class,'updateUser'])->name('update.user');
Route::get('/updatepage/{id}',  [UserController::class,'updatePage'])->name('update.page');

Route::get('/delete/{id}', [UserController::class,'deleteUser'])->name('delete.user');

Route::view('newuser','adduser');