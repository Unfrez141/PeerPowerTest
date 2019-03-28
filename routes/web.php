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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LoansController@show');
Route::get('/create', 'LoansController@create');
Route::get('/form/{test}', 'HelloController@test');
Route::get('/form/{test}/Hello', 'HelloController@test2');
// Route::get('/form', function () {
//     return view('form');
// });