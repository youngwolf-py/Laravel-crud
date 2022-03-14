<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TeacherController;
use app\Http\Controllers\ClientController;
use app\Http\Controllers\CustomerController;
use app\Http\Controllers\JobController;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\VariantController;

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

Route::get('/teachers', 'App\Http\Controllers\TeacherController@index')->name('teachers.index');
Route::get('/teachers/create', 'App\Http\Controllers\TeacherController@create')->name('teachers.create');
Route::post('/teachers/store', 'App\Http\Controllers\TeacherController@store')->name('teachers.store');
Route::get('/teachers/edit/{id}', 'App\Http\Controllers\TeacherController@edit')->name('teachers.edit');
Route::PUT('/teachers/update/{id}', 'App\Http\Controllers\TeacherController@update')->name('teachers.update');
Route::get('/teachers/delete/{id}', 'App\Http\Controllers\TeacherController@delete')->name('teachers.delete');


Route::get('/customers', 'App\Http\Controllers\CustomerController@index')->name('customers.index');
Route::get('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::post('/customers/store', 'App\Http\Controllers\CustomerController@store')->name('customers.store');
Route::get('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit')->name('customers.edit');
Route::PUT('/customers/update/{id}', 'App\Http\Controllers\CustomerController@update')->name('customers.update');
Route::get('/customers/delete/{id}', 'App\Http\Controllers\CustomerController@delete')->name('customers.delete');

Route::get('/jobs', 'App\Http\Controllers\JobController@index')->name('jobs.index');
Route::get('/jobs/create', 'App\Http\Controllers\JobController@create')->name('jobs.create');
Route::post('/jobs/store', 'App\Http\Controllers\JobController@store')->name('jobs.store');
Route::get('/jobs/edit/{id}', 'App\Http\Controllers\JobController@edit')->name('jobs.edit');
Route::PUT('/jobs/update/{id}', 'App\Http\Controllers\JobController@update')->name('jobs.update');
Route::get('/jobs/delete/{id}', 'App\Http\Controllers\JobController@delete')->name('jobs.delete');

Route::get('/bills', 'App\Http\Controllers\BillController@index')->name('bills.index');
Route::post('/calculate_bill', 'App\Http\Controllers\BillController@calculate_bill')->name('bills.calculate_bill');


Route::get('/clients', 'App\Http\Controllers\ClientController@index')->name('clients.index');
Route::get('/clients/create', 'App\Http\Controllers\ClientController@create')->name('clients.create');
Route::post('/clients/store', 'App\Http\Controllers\ClientController@store')->name('clients.store');
Route::get('/clients/edit/{id}', 'App\Http\Controllers\ClientController@edit')->name('clients.edit');
Route::PUT('/clients/update/{id}', 'App\Http\Controllers\ClientController@update')->name('clients.update');
Route::get('/clients/delete/{id}', 'App\Http\Controllers\ClientController@delete')->name('clients.delete');


Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('/products/store', 'App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('/products/edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::PUT('/products/update/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::get('/products/delete/{id}', 'App\Http\Controllers\ProductController@delete')->name('products.delete');

//---------for variant--------------
Route::get('/variants/index/{id}', 'App\Http\Controllers\VariantController@index')->name('variants.index');
Route::get('/variants/create/{id}', 'App\Http\Controllers\VariantController@create')->name('variants.create');
Route::post('/variants/store', 'App\Http\Controllers\VariantController@store')->name('variants.store');
Route::get('/variants/edit/{id}', 'App\Http\Controllers\VariantController@edit')->name('variants.edit');
Route::PUT('/variants/update/{id}', 'App\Http\Controllers\VariantController@update')->name('variants.update');
Route::get('/variants/delete/{id}', 'App\Http\Controllers\VariantController@delete')->name('variants.delete');

