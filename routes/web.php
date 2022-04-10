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


Route::get('user/dashboard', function () {
    return view('user-dashboard');
})->middleware(['auth'])->name('user.dashboard');







require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
