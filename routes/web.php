<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetributionController;
use App\Http\Controllers\RusunawaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
 * PUBLIC
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * File Uploader
*/

Route::post('/upload', [FileUploadController::class, 'storeUploads'])->name('file.upload');

/*
 * AUTH
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

/*
 * RETRIBUTION
*/

Route::prefix('retributions')->name('retributions.')->controller(RetributionController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{retribution}', 'show')->name('show');
    Route::get('/{retribution}/edit', 'edit')->name('edit');
    Route::put('/{retribution}/update', 'update')->name('update');
    Route::delete('/{retribution}/destroy', 'destroy')->name('destroy');
});

/*
 * RUSUNAWA
*/

Route::prefix('rusunawas')->name('rusunawas.')->controller(RusunawaController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{rusunawa}', 'show')->name('show');
    Route::get('/{rusunawa}/edit', 'edit')->name('edit');
    Route::put('/{rusunawa}/update', 'update')->name('update');
    Route::delete('/{rusunawa}/destroy', 'destroy')->name('destroy');
});

/*
 * USERS
*/

Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{user}', 'show')->name('show');
    Route::get('/{user}/edit', 'edit')->name('edit');
    Route::put('/{user}/update', 'update')->name('update');
    Route::delete('/{user}/destroy', 'destroy')->name('destroy');
});

/*
 * ACCOUNT
*/

Route::get('/account', function () {
    return view('admin.account');
});