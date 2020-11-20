<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','ShowseminarController@showhome');

Route::get('/seminar',function(){
	return view('seminar');
});

Route::get('/daftar','ShowseminarController@show');
Route::post('/create','AdddataController@insert');
Route::get('/delete','DeleteseminarController@show');
Route::get('hapus/{id}','DeleteseminarController@destroy');
Route::post('addseminar','AddseminarController@addseminar');
Route::get('homesuccess/{id}','ShowseminarController@showsuccess');
Route::get('homepending/{id}','ShowseminarController@showpending');
Route::get('/home','ShowseminarController@showhome');


Route::get('/admin','AdminController@index');
//seminar
Route::get('/listseminar','SeminarController@index');
Route::get('/add_seminar','SeminarController@create');
Route::post('/store_seminar','SeminarController@store');
Route::get('/edit_seminar/{id}','SeminarController@edit');
Route::put('/update_seminar','SeminarController@update');
Route::delete('/delete_seminar/{id}','SeminarController@destroy');
//registration
Route::get('/listregistration','RegistrationController@index');

// Route::post('save','AdddataController@insertdatabase');