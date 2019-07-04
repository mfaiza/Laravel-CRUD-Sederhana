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

Route::get('/index', 'SiswaController@index'); //Index

Route::post('/index', 'SiswaController@store'); //Create 

Route::get('/addSiswa', 'SiswaController@create'); //Direct Link

Route::get('/index/show/{id}', 'SiswaController@show'); //Tampil Data

Route::get('/index/edit/{id}', 'SiswaController@edit'); //EDIT

Route::put('/index/{id}', 'SiswaController@update'); //UPDATE

Route::get('/index/{id}', 'SiswaController@destroy'); //DELETE
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
