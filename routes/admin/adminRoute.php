<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/**
 ** ALL ADMIN ROUTES FOR SMS SYSTEM
 */

//*Admin Login Panel
Route::GET('/admin', function () {
    return redirect()->route('admin.login');
})->middleware('guest');
Route::GET('/admin/login', [LoginController::class, 'adminLoginPanel'])->name('admin.login');

// *====================================


Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
    //*Admin Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');


    //*DASHBAORD
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
