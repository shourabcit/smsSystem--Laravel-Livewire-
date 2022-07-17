<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/**
 ** ALL ADMIN ROUTES FOR SMS SYSTEM
 */

//*Admin Login Panel
Route::GET('/admin', function () {
    return redirect()->route('admin.login');
})->middleware('guest');
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::GET('/login', [LoginController::class, 'adminLoginPanel'])->name('login');
});
