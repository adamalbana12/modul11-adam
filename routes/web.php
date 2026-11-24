<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;


Route::redirect('/', '/employees');

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/employees', function () {
    return 'Halaman Employees';
})->name('employees.index');

Route::get('/profile', function () {
    return 'Halaman Profile';
})->name('profile');

Route::get('profile', ProfileController::class)->name('profile');

Route::resource('employees', EmployeeController::class);
