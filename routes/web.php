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

//Route::resource('/students','StudentController');
Route::get('/','StudentController@index')->name('student.index');
Route::post('/','StudentController@index')->name('student.index');
Route::get('/student','StudentController@create')->name('student.create');
Route::post('/student','StudentController@store')->name('student.store');
Route::delete('/student/{id}','StudentController@destroy')->name('student.destroy');
Route::post('/student/{id}','StudentController@update')->name('student.update');
Route::get('/student/{id}','StudentController@edit')->name('student.edit');

