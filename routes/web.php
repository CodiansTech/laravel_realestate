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
    return view('pages.index');
});

Route::get('/house', function () {
    return view('pages.properties.index');
});

Route::get('/list', function () {
    return view('pages.listings.listing_map');
});

Route::get('/list-grid', function () {
    return view('pages.listings.listing_grid');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admin', function () {
    return view('admin.pages.properties.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
