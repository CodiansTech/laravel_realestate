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
})->name('index');

Route::get('list/{id}', 'PropertyController@show')->name('showProperty');

Route::get('list', function () {
    return view('pages.properties.grid_listing');
});


Auth::routes();

Route::group(['middleware' => ['permission:view-admin']], function () {
    Route::get('account', function () {
        return view('admin.pages.index');
    })->name('admin');
});

Route::group(['middleware' => ['permission:manage-users']], function () {
    Route::get('account/users', 'UserController@index')->name('admin.users.index');
    Route::get('account/users/{id}/edit', 'UserController@edit')->name('admin.users.edit');
    Route::post('account/users/{id}/edit', 'UserController@update')->name('admin.users.update');
});

Route::group(['middleware' => ['permission:manage-properties']], function () {
    Route::get('account/properties', 'PropertyController@adminIndex')->name('admin.properties.index');
    Route::get('account/properties/create', 'PropertyController@create')->name('admin.properties.create');
    Route::post('account/properties/store', 'PropertyController@store')->name('admin.properties.store');
    Route::get('account/properties/{id}/edit', 'PropertyController@edit')->name('admin.properties.edit');
    Route::post('account/properties/{id}/update', 'PropertyController@update')->name('admin.properties.update');
});