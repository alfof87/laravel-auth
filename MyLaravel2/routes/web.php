<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@index') -> name('emp.index');
Route::get('/show/{id}', 'GuestController@show') -> name('emp.show');
// Route::get('/create', 'EmployeeController@create') -> name('emp.create');
// Route::post('/store', 'EmployeeController@store') -> name('emp.store');
Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('emp.destroy');

Auth::routes();
