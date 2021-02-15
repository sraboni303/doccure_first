<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::put('/password', [App\Http\Controllers\AdminController::class, 'password'])->name('password');
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::patch('/update', [App\Http\Controllers\AdminController::class, 'update'])->name('update');

Route::resource('doctor', 'App\Http\Controllers\DoctorController');