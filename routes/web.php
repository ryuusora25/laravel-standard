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
//Route::get('/siswas', 'SiswaController@index');
//Route::get('/siswas/cetak_pdf', 'SiswaController@cetak_pdf');
Route::get('siswas', 'App\Http\Controllers\SiswaController@index');
Route::get('siswas/cetak_pdf', 'App\Http\Controllers\SiswaController@cetak_pdf');
Route::resource('siswas', 'App\Http\Controllers\SiswaController');