<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index') -> name('emp.index');
Route::get('/show/{id}', 'EmployeeController@show') -> name('emp.show');
Route::get('/create', 'EmployeeController@create') -> name('emp.create');
Route::post('/store', 'EmployeeController@store') -> name('emp.store');
Route::get('/destroy/{id}', 'EmployeeController@destroy') -> name('emp.destroy');

Auth::routes();
