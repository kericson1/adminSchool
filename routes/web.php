<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('student_show', 'StudentController@show');
Route::get('student_delete/{id}', 'StudentController@destroy');
Route::get('student_create', 'StudentController@create');

Route::post('student_store', 'StudentController@store');
Route::get('student_edit/{id}', 'StudentController@edit');
Route::post('student_update/{id}', 'StudentController@update');
