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
    return view('pages/home');
});
Route::get('/head', function () {
    return view('livewire/header');
});
Route::get('/prod', function () {
    return view('pages/product');
});
Route::get('/pay', function () {
    return view('pages/payment');
});
Route::get('/contributor', function () {
    return view('pages/contributor');
});
Route::get('/ideas', function () {
    return view('pages/ideas');
});
Route::get('/tools', function () {
    return view('pages/tools');
});
