<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});


Route::resource('/' , LoginController::class);
Route::post('actionlogin' , [LoginController::class , 'actionLogin'])->name('actionlogin');
Route::post('actionlogout' , [LoginController::class , 'actionLogout'])->name('actionLogout');

Route::resource('dashboard' , DashboardController::class);



Route::resource('user', UserController::class);
Route::get('/users/restore' , [UserController::class, 'showTrashed'])->name('user.restore');
Route::post('/user/restore' , [UserController::class, 'restoreTrashed'])->name('user.restores');
Route::post('/user/forceDelete' , [UserController::class, 'forceDelete'])->name('user.forceDelete');

Route::middleware(['auth', 'administrator'])->group(function(){
    
    Route::resource('levels', LevelController::class);
    Route::get('/level/history' , [LevelController::class, 'showTrashed'])->name('levelhistory');
    Route::post('/level/restore' , [LevelController::class,'restoreTrashed'])->name('level.restores');
});

    Route::resource('book', BookController::class);
    Route::get('/books/restore' , [BookController::class, 'showTrashed'])->name('bookhistory');
    Route::post('/books/restore' , [BookController::class , 'restoreTrashed'])->name('book.restores');
    
    Route::resource('member' , MemberController::class);
    Route::get('/members/history' , [MemberController::class, 'showTrashed'])->name('memberhistory');
    Route::post('/members/restore' , [MemberController::class, 'restoreTrashed'])->name('member.restores');

    Route::resource('transaction' , TransactionController::class);
    Route::get('showTrx' , [TransactionController::class, 'showTrx'])->name('showTrx');
    Route::get('returnabook' , [TransactionController::class, 'returnabook'])->name('returnabook');
    Route::get('loaning' , [TransactionController::class, 'loaning'])->name('loaning');
    Route::post('loaningstore' , [TransactionController::class, 'loaningstore'])->name('loaningstore');
    // Route::get('loaningstore' , [TransactionController::class, 'loaningstore']);
