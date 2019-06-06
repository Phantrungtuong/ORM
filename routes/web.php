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

Route::get('comment-post', 'Relationship@cmtpost');
Route::get('comment-product', 'Relationship@cmtproduct');
Route::get('object-comment', 'Relationship@objectcmt');

Route::get('admin-role', 'Relationship@admin_roles');
Route::get('admin-role-per', 'Relationship@admin_roles_permissions');

Route::get('admin-rp', 'Relationship@admin_role_per');