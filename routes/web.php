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

Route::get('/', 'DisciplinaController@index');
Route::resource('/disciplinas', 'DisciplinaController');
Route::get('/disciplinas/{disciplina_id}/turmas/create', 'DisciplinaController@createTurma');
Route::post('/disciplinas/{disciplina}/turmas','DisciplinaController@storeTurma');