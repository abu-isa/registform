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


Route::get('/admin','LoginController@index');
Route::get('/listseminar','SeminarController@index');

// Route::post('save','AdddataController@insertdatabase');