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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('donvi/getdatatable', 'DonViController@getdatatable')->name('donvi.getdatatable');
Route::resource('donvi','DonViController');


Route::get('hddientu/getdatatable', 'HDDienTuController@getdatatable')->name('hddientu.getdatatable');
Route::resource('hddientu','HDDienTuController');


