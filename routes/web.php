<?php

use GuzzleHttp\Client;
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

Route::get('/getcustomers', 'GetApiCustomersController@GetCustomers');

Route::resource('clientes', 'CustomerController');
Route::resource('/', 'CustomerController');

Route::resource('direcciones', 'AdressesController');

