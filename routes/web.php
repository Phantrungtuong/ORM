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


Route::get('hasone', 'Relationship@hasone');
Route::get('belongto', 'Relationship@belongto');

Route::get('onemany', 'Relationship@onemany');
Route::get('manyone', 'Relationship@manyone');

Route::get('manymany', 'Relationship@manymany');
Route::get('many-many', 'Relationship@many_many');


Route::get('trinity', 'Relationship@trinity');
Route::get('trinity_backwards', 'Relationship@trinity_backwards');