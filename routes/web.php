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

/*
 * PUBLIC
*/

Route::get('/', function () {
    return view('welcome');
});


/*
 * AUTH
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

/*
 * RETRIBUTION
*/

Route::get('/retributions', function () {
    return view('admin.retributions.list');
});

Route::get('/retributions/create', function () {
    return view('admin.retributions.create');
});

/*
 * RUSUNAWA
*/

Route::get('/rusunawa', function () {
    return view('admin.rusunawa.list');
});

Route::get('/rusunawa/create', function () {
    return view('admin.rusunawa.create');
});

/*
 * USERS
*/

Route::get('/users', function () {
    return view('admin.users.list');
});

Route::get('/users/create', function () {
    return view('admin.users.create');
});

/*
 * ROLES
*/

Route::get('/roles', function () {
    return view('admin.roles.list');
});

Route::get('/roles/create', function () {
    return view('admin.roles.create');
});