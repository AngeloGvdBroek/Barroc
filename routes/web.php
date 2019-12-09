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
Route::post('supply.filter', 'SuppliesController@filter')->name('supply.filter');
//Route::get('faults', 'FaultsController@create')->name('faults.create');
Route::resource('faults', 'FaultsController');
Route::resource('workorders', 'WorkOrdersController');
//Route::resource('faults.show', 'FaultsController@show')->name('faults.show');
Route::resource('supply', 'SuppliesController');
//Route::resource('categories', 'categoriesController');
//Route::resource('categories.show', 'categoriesController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sales', 'SalesController@dashboard')->name('sales');
Route::get('/productpage', 'productpage@dashboard')->name('productpage');
Route::get('/contactformulier', 'contactformulier@dashboard')->name('contactformulier');
//route::post('supply.filter', 'suppliesController@filter')->name('suppliesController.filter');
Route::get('/register', function (){return  view('/auth/register');})->middleware('role:1');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::resource('quotes', 'QuoteController');
Route::resource('customers', 'CustomerController');

