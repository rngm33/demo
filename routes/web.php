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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@indexx')->name('home');

Route::get('/about','HomeController@about') -> name('about');

Route::get('/student/create',['as' => 'student.create', 'uses' =>'StudentController@create']);
Route::post('/student/save',['as' => 'student.save', 'uses' =>'StudentController@save']);
Route::post('/student/update/{id}',['as' => 'student.update', 'uses' => 'StudentController@update']);
Route::get('/student/edit/{id}',['as' => 'student.edit', 'uses' =>'StudentController@edit']);
Route::get('/student/view/{id}',['as' => 'student.view', 'uses' =>'StudentController@view']);
Route::get('/student/delete/{id}',['as' => 'student.delete', 'uses' =>'StudentController@delete']);

Route::get('/student',['as' => 'student.index', 'uses' =>'StudentController@index']);

Route::get('/firebase',['as' => 'firebase.index','uses'=>'FirebaseController@index']);

