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

Route::get('/', 'PageController@index')->name('index');

Route::get('contact', 'PageController@contact')->name('contact.index');

Route::get('list', 'PropertyController@listProperties')->name('listproperties');
Route::get('list/{id}', 'PropertyController@show')->name('showProperty');

Route::post('account/update', 'UserController@updateProfile')->name('update.profile');
Route::post('account/password', 'UserController@updatePassword')->name('update.password');

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
    Route::get('account/myproperties', 'PropertyController@myproperties')->name('admin.properties.myproperties');
    Route::get('account/properties/create', 'PropertyController@create')->name('admin.properties.create');
    Route::post('account/properties/store', 'PropertyController@store')->name('admin.properties.store');
    Route::get('account/properties/{id}/edit', 'PropertyController@edit')->name('admin.properties.edit');
    Route::get('account/properties/{id}/editimages', 'PropertyController@editImages')->name('admin.properties.editimages');
    Route::get('account/properties/setfeaturedimage/{imageid}', 'PropertyController@setFeaturedImage')->name('admin.properties.setfeatured');
    Route::post('account/properties/{id}/update', 'PropertyController@update')->name('admin.properties.update');
    Route::get('account/approveproperties', 'PropertyController@approveproperties')->name('admin.properties.approve');
    Route::get('account/approveproperty/{id}', 'PropertyController@approveproperty')->name('admin.properties.approveproperty');
});