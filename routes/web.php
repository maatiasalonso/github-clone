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

Route::get('/pulls', function () {
    return view('pages.pulls');
});

Route::get('/issues', function () {
    return view('pages.issues');
});

Route::get('/marketplace', function () {
    return view('pages.marketplace');
});

Route::get('/explore', function () {
    return view('pages.explore');
});
