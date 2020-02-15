<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/401',function () {
   return view('errors/401');
});

Route::get('/',  ['as'=>'login', 'uses'=>'LoginController@index']);
Route::get('/login',  ['as'=>'login', 'uses'=>'LoginController@index']);
Route::post('/login/entrar', ['as'=>'login.entrar', 'uses'=>'LoginController@entrar']);
Route::get('/login/sair', ['as'=>'login.sair', 'uses'=>'LoginController@sair']);

Route::group(['middleware'=> 'auth'], function () {
    Route::get('/alunos', ['as'=>'alunos', 'uses'=>'AlunoController@index']);
    Route::post('/alunos', ['as'=>'alunos', 'uses'=>'AlunoController@obtemAlunos']);
    Route::get('/aluno/adicionar', ['as'=>'aluno.adicionar', 'uses'=>'AlunoController@adicionar']);
    Route::post('/aluno/salvar', ['as'=>'aluno.salvar', 'uses'=>'AlunoController@salvar']);
    Route::get('/aluno/editar/{id}', ['as'=>'aluno.editar', 'uses'=>'AlunoController@editar']);
    Route::put('/aluno/atualizar/{id}', ['as'=>'aluno.atualizar', 'uses'=>'AlunoController@atualizar']);
    Route::get('/aluno/deletar/{id}', ['as'=>'aluno.deletar', 'uses'=>'AlunoController@deletar']);
    Route::get('/turmas', ['as'=>'turmas', 'uses'=>'TurmaController@index']);
    Route::post('/turmas', ['as'=>'turmas', 'uses'=>'TurmaController@obtemTurmas']);
    Route::get('/turma/adicionar', ['as'=>'turma.adicionar', 'uses'=>'TurmaController@adicionar']);
    Route::post('/turma/salvar', ['as'=>'turma.salvar', 'uses'=>'TurmaController@salvar']);
    Route::get('/turma/editar/{id}', ['as'=>'turma.editar', 'uses'=>'TurmaController@editar']);
    Route::put('/turma/atualizar/{id}', ['as'=>'turma.atualizar', 'uses'=>'TurmaController@atualizar']);
    Route::get('/turma/deletar/{id}', ['as'=>'turma.deletar', 'uses'=>'TurmaController@deletar']);
    Route::get('/turma/{id}/alunos', ['as'=>'turma.alunos', 'uses'=>'TurmaController@alunos']);
});