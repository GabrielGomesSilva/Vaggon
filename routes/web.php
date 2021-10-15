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


Route::get('/Alunos', 'App\Http\Controllers\AlunosController@index')->name('aluno.index');
Route::get('/Alunos/create', 'App\Http\Controllers\AlunosController@create')->name('aluno.create');
Route::post('/Alunos/store', 'App\Http\Controllers\AlunosController@store')->name('aluno.store');
Route::get('/Alunos/editar/{id}', 'App\Http\Controllers\AlunosController@edit')->name('aluno.edit');
Route::post('/Alunos/update/{id}', 'App\Http\Controllers\AlunosController@update')->name('aluno.update');
Route::get('/Alunos/{id}/edit', 'App\Http\Controllers\AlunosController@destroy')->name('aluno.destroy');


Route::get('/Disciplinas', 'App\Http\Controllers\DisciplinaController@index')->name('disciplina.index');
Route::get('/Disciplinas/create', 'App\Http\Controllers\DisciplinaController@create')->name('disciplina.create');
Route::post('/Disciplinas/store', 'App\Http\Controllers\DisciplinaController@store')->name('disciplina.store');
Route::get('/Disciplinas/editar/{id}', 'App\Http\Controllers\DisciplinaController@edit')->name('disciplina.edit');
Route::post('/Disciplinas/update/{id}', 'App\Http\Controllers\DisciplinaController@update')->name('disciplina.update');
Route::get('/Disciplinas/{id}/edit', 'App\Http\Controllers\DisciplinaController@destroy')->name('disciplina.destroy');

Route::get('/Turmas', 'App\Http\Controllers\AlunosController@index')->name('turma.index');
Route::get('/Turmas/create', 'App\Http\Controllers\AlunosController@create')->name('turma.create');
Route::post('/Turmas/store', 'App\Http\Controllers\AlunosController@store')->name('turma.store');
Route::get('/Turmas/editar/{id}', 'App\Http\Controllers\AlunosController@edit')->name('turma.edit');
Route::post('/Turmas/update/{id}', 'App\Http\Controllers\AlunosController@update')->name('turma.update');
Route::get('/Turmas/{id}/edit', 'App\Http\Controllers\AlunosController@destroy')->name('turma.destroy');

Route::get('/GradHorarios', 'App\Http\Controllers\GradHorariosController@index')->name('gradhorario.index');
Route::get('/GradHorarios/create', 'App\Http\Controllers\GradHorariosController@create')->name('gradhorario.create');
Route::post('/GradHorarios/store', 'App\Http\Controllers\GradHorariosController@store')->name('gradhorario.store');
Route::get('/GradHorarios/editar/{id}', 'App\Http\Controllers\GradHorariosController@edit')->name('gradhorario.edit');
Route::post('/GradHorarios/update/{id}', 'App\Http\Controllers\GradHorariosController@update')->name('gradhorario.update');
Route::get('/GradHorarios/{id}/edit', 'App\Http\Controllers\GradHorariosController@destroy')->name('gradhorario.destroy');


//Route::get('/professores', 'App\Http\Controllers\AlunosController@index')->name('alunos.index');;
Route::get('/horario', 'App\Http\Controllers\HorariosController@index')->name('horarios.index');;
Route::get('/horario/create', 'App\Http\Controllers\HorariosController@create')->name('horario.create');
Route::post('/horario/store', 'App\Http\Controllers\HorariosController@store')->name('horario.store');
Route::get('/horario/editar/{id}', 'App\Http\Controllers\HorariosController@edit')->name('horario.edit');
Route::post('/horario/update/{id}', 'App\Http\Controllers\HorariosController@update')->name('horario.update');
Route::get('/horario/{id}/edit', 'App\Http\Controllers\HorariosController@destroy')->name('horario.destroy');

//Route::get('/horarios', 'App\Http\Controllers\HorariosController@index')->name('horarios.index');;
