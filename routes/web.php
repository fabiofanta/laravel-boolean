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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pages',  function () {
    return view('admin.pages.index');
})->name('admin.pages.index');

Route::get('/pages/create',  function () {
    return view('admin.pages.create');
})->name('admin.pages.create');

Route::get('/pages/{id}/edit',  function () {
    return view('admin.pages.edit');
})->name('admin.pages.edit');

Route::get('/photos',  function () {
    return view('admin.photos.index');
})->name('admin.photos.index');

Route::get('/photos/create',  function () {
    return view('admin.photos.create');
})->name('admin.photos.create');
