<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/latihan2', function () {
    return view('auth.login');
});
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/proseslogin', 'AuthController@proseslogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/penerima', 'PenerimaController@index');
    Route::post('/penerima/create', 'PenerimaController@create');
    Route::get('/penerima/{id}/edit', 'PenerimaController@edit');
    Route::post('/penerima/{id}/update', 'PenerimaController@update');
    Route::get('/penerima/{id}/detail', 'PenerimaController@detail');
    Route::get('/penerima/{id}/delete', 'PenerimaController@delete');
    Route::get('/penerima/exportpdf', 'PenerimaController@exportpdf');
});
