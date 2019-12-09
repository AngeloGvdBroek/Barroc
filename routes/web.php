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
Route::get('/productpage', 'productpage@dashboard')->name('productpage');

route::post('products.filter', 'productsController@filter')->name('productsController.filter');
Route::get('/contactform', 'contactformulier@dashboard')->name('contactformulier');

Route::get('/contactformulier', 'contactformulier@dashboard')->name('contactformulier');
//route::post('supply.filter', 'suppliesController@filter')->name('suppliesController.filter');

Route::get('/register', function (){return  view('/auth/register');})->middleware('role:1');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::resource("contactformulier", "contactformulierController");

Route::get('/sales', 'SalesController@dashboard')->name('sales')->middleware('auth', 'role:2');
Route::get('/finance', 'FinanceController@dashboard')->name('finance')->middleware('auth', 'role:3');
Route::get('/maintenance', 'MaintenanceController@dashboard')->name('maintenance')->middleware('auth', 'role:4');
// Route::get('/head-maintenance', 'HeadMaintenanceController@dashboard')->name('head-maintenance')->middleware('auth', 'role:5');
Route::get('/purchase', 'PurchaseController@dashboard')->name('purchase')->middleware('auth', 'role:6');

Route::get('/test', function() {
	$user = \Auth::user();
	dd($user->role_id);
});

Route::resource('quotes', 'QuoteController')->middleware('auth', 'role:2', 'role:7');
Route::resource('customers', 'CustomerController');
Route::resource('invoices', 'InvoiceController');
