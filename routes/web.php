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



    Route::get('/', 'PenilaianController@top_siswa')->name('index');
    Route::get('/data', 'PenilaianController@index')->name('data');
    Route::get('/form', function () { return view('dashboard.form'); })->name('form');
    Route::post('/data',  'PenilaianController@store')->name('data.store');