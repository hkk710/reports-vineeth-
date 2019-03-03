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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/patient_register', 'PatientController@create')->name('patient_register');
Route::post('/doctors', 'HomeController@patientview')->name('doctors');
Route::get('/messageshow', 'MessageController@show')->name('messageshow');
Route::get('/chat', 'MessageController@index')->name('chat');
Route::post('/chat', 'MessageController@store')->name('chat');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin_messageshow', 'AdminController@show')->name('admin_messageshow');
Route::post('/admin_chat', 'MessageController@store')->name('admin_chat');
Route::get('/admin_usershow', 'AdminController@usershow')->name('admin_usershow');
Route::get('doctors',['uses'=>'AdminController@doctorsview']);
