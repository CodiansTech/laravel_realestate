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

Route::get('house', function () {
    return view('pages.properties.index');
});

Route::get('list', function () {
    return view('pages.listings.listing_map');
});

Route::get('list-grid', function () {
    return view('pages.listings.listing_grid');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});



Auth::routes();

Route::group(['middleware' => ['permission:view-admin']], function () {
    Route::get('admin', function () {
        return view('admin.pages.properties.index');
    })->name('admin');
});

Route::group(['middleware' => ['permission:manage-users']], function () {
    Route::get('admin/users', 'UserController@index')->name('admin.users.index');
    Route::get('admin/users/{id}/edit', 'UserController@edit')->name('admin.users.edit');
    Route::post('admin/users/{id}/edit', 'UserController@update')->name('admin.users.update');
});

Route::group(['middleware' => ['permission:manage-properties']], function () {
    Route::get('admin/properties', 'PropertyController@adminIndex')->name('admin.properties.index');
});