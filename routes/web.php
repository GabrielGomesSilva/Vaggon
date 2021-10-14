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

Route::get('/', 'App\Http\Controllers\AppController@index');

Route::get('/professores', 'App\Http\Controllers\ProfController@index')->name('prof.index');
Route::get('/alunos', 'App\Http\Controllers\AlunosController@index')->name('alunos.index');;
Route::get('/horarios', 'App\Http\Controllers\HorariosController@index')->name('horarios.index');;
