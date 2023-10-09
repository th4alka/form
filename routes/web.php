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

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');

Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('contact.confirm');

Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@send')->name('contact.send');
