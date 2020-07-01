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

// Returns view home.blade.php
Route::get('/', function () {
    return view('home');
});

// Calls details() in TicketsController.php with {id} as $id
Route::get('/tickets/id/{id}', 'TicketsController@details');

// Calls instore() in ReportsController.php
Route::get('/tickets/instore', 'ReportsController@instore');

// Calls send() in ReportsController.php
Route::get('/tickets/send', 'ReportsController@send');

// Calls workshop() in ReportsController.php
Route::get('/tickets/workshop', 'ReportsController@workshop');

// Calls return() in ReportsController.php
Route::get('/tickets/return', 'ReportsController@return');

// Calls complete() in ReportsController.ph
Route::get('/tickets/complete', 'ReportsController@complete');

// Calls paid() in ReportsController.php
Route::get('/tickets/paid', 'ReportsController@paid');

// Calls all() in ReportsController.php
Route::get('/tickets/all', 'ReportsController@all');

// Calls customers() in ReportsController.php
Route::get('/customers', 'ReportsController@customers');
