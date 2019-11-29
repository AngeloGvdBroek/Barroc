<?php

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
Route::resource('products', 'productsController');
Route::resource('categories', 'categoriesController');
Route::resource('categories.show', 'categoriesController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sales', 'SalesController@dashboard')->name('sales');
Route::get('/productpage', 'productpage@dashboard')->name('productpage');
Route::get('/contactformulier', 'contactformulier@dashboard')->name('contactformulier');

Route::get('/register', function (){return  view('/auth/register');})->middleware('role:1');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::resource('quotes', 'QuoteController');
Route::resource('customers', 'CustomerController');

