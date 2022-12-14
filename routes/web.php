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
Route::get('/aanmelden', function () {
    return view('aanmelden');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/overzicht_page', function () {
    return view('overzicht_page');
});
Route::get('/verzorgen_page', function () {
    return view('verzorgen_page');
});
// Route::get('/user/create', [PostController::class, 'create']);
Route::get('/posten', 'PostController@index')->name('post');
