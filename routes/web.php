<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'EmployeeController@index');

Route::post('employee-edit', 'EmployeeController@action')->name('employee_edit');