<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetributionController;
use App\Http\Controllers\RusunawaController;
use App\Http\Controllers\UserController;
use App\Models\Retribution;

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
    return view('home.welcome');
})->name('home.index');

Route::get('/profile', function () { 
    return view('home.profile');
})->name('home.profile');

Route::get('/service', function () { 
    return view('home.service');
})->name('home.service');

Route::get('/service', [HomeController::class, 'service'])->name('home.service');
Route::post('/service', [HomeController::class, 'store'])->name('home.store');


/*
 * AUTH
*/

Route::name('auth.')->controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
});

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('auth.logout');

Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

/*
 * RETRIBUTION
*/

Route::prefix('retributions')->name('retributions.')->controller(RetributionController::class)
    ->middleware('auth')->group(function () {
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

Route::prefix('rusunawas')->name('rusunawas.')->controller(RusunawaController::class)
    ->middleware('auth')->group(function () {
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

Route::prefix('users')->name('users.')->controller(UserController::class)
    ->middleware('auth')->group(function () {
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

Route::middleware('auth')->get('/account', function () {
    return view('admin.account');
});