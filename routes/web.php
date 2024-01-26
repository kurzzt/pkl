<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/retribution', function () {
    return view('admin.retribution');
});

Route::get('/rusunawa', function () {
    return view('admin.rusunawa');
});

Route::get('/users', function () {
    return view('admin.users');
});

Route::get('/roles', function () {
    return view('admin.roles');
});