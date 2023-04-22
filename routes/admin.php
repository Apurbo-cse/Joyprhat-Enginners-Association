<?php

use App\Http\Controllers\Admin\AdvisorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\EternalController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\IntThanaController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ThanaCommitteeController;
use App\Http\Controllers\Admin\ThanaCommitteeTypeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PresidentController;
use App\Http\Controllers\Admin\VicePresidentController;
use App\Http\Controllers\Admin\SecretaryController;
use App\Http\Controllers\Admin\ExecutiveMemberController;

use App\Http\Controllers\Admin\OtherController;




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

Route::get('/dashboard', function () {
    return view('admin.home.home');
})->middleware(['auth'])->name('admin.dashboard');


Route::group(['prefix' => 'dashboard/', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::resource('thana_type', ThanaCommitteeTypeController::class);

    Route::resource('thana', ThanaCommitteeController::class);
    Route::resource('user', UserController::class);
    Route::group(['prefix' => 'int-thana/', 'as' => 'int_thana.'], function () {
        Route::get('joypurhat', [IntThanaController::class, 'joypurhat'])->name('joypurhat');
        Route::get('panchbibi', [IntThanaController::class, 'panchbibi'])->name('panchbibi');
        Route::get('kalai', [IntThanaController::class, 'kalai'])->name('kalai');
        Route::get('khetlal', [IntThanaController::class, 'khetlal'])->name('khetlal');
        Route::get('akkelpur', [IntThanaController::class, 'akkelpur'])->name('akkelpur');

    });

    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('gallery', GalleryController::class);

    Route::resource('president', PresidentController::class);
    Route::resource('vice-president', VicePresidentController::class);
    Route::resource('secretary', SecretaryController::class);
    Route::resource('exicutive', ExecutiveMemberController::class);

    Route::resource('member', MemberController::class);
    Route::resource('eternal', EternalController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('advisor', AdvisorController::class);
    Route::resource('developer', DeveloperController::class);


    Route::get('president-make-as-user', [OtherController::class, 'president_as_user'])->name('president_as_user');
    Route::get('vice-president-make-as-user', [OtherController::class, 'vice_president_as_user'])->name('vice_president_as_user');
    Route::get('secretary-make-as-user', [OtherController::class, 'secretary_as_user'])->name('secretary_as_user');
    Route::get('exicutive-make-as-user', [OtherController::class, 'exicutive_as_user'])->name('exicutive_as_user');

    Route::group(['prefix' => 'category/', 'as' => 'category.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::get('edit', [CategoryController::class, 'edit'])->name('edit');
    });

});
