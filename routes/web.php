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
Route::get('/Cadastro/create', 'App\Http\Controllers\ProfController@create')->name('prof.create');
Route::Post('/professores/store', 'App\Http\Controllers\ProfController@store')->name('prof.store');
Route::get('/Editar/professores/{id}', 'App\Http\Controllers\ProfController@edit')->name('prof.edit');
Route::Post('/Editar/{id}', 'App\Http\Controllers\ProfController@update')->name('prof.update');
Route::get('/professores/{id}/edit', 'App\Http\Controllers\ProfController@destroy')->name('prof.destroy');




//Route::get('/professores', 'App\Http\Controllers\AlunosController@index')->name('alunos.index');;
Route::get('/horarios', 'App\Http\Controllers\HorariosController@index')->name('horarios.index');;

//Route::get('/horarios', 'App\Http\Controllers\HorariosController@index')->name('horarios.index');;
