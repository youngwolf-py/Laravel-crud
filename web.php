<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TeacherController;
use app\Http\Controllers\CustomerController;

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


Route::get('/customers', 'App\Http\Controllers\CustomerController@index')->name('customers.index');
Route::get('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::post('/customers/store', 'App\Http\Controllers\CustomerController@store')->name('customers.store');
Route::get('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit')->name('customers.edit');
Route::PUT('/customers/update/{id}', 'App\Http\Controllers\CustomerController@update')->name('customers.update');
Route::get('/customers/delete/{id}', 'App\Http\Controllers\CustomerController@delete')->name('customers.delete');



