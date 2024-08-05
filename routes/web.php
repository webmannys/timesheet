<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimesheetController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::resource('timesheets', TimesheetController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
