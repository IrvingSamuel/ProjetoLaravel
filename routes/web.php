<?php


Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'alunos','where'=>['id'=>'[0-9]+']], function() {

    Route::get('',['as' => 'alunos', 'uses' => 'alunosController@index']);

    Route::get('create',['as'=>'alunos.create', 'uses' =>'alunosController@create']);

    Route::post('store',['as'=>'alunos.store','uses'=>'alunosController@store']);

    Route::get('{id}/destroy',['as'=>'alunos.destroy','uses'=>'alunosController@destroy']);

    Route::get('{id}/edit',['as'=>'alunos.edit','uses'=>'alunosController@edit']); 

    Route::put('{id}/update',['as'=>'alunos.update','uses'=>'alunosController@update']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
