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
       //name   //controller -- in this case an anonymous function
Route::get('/', function () {
           //show welcome page (resources>views>welcome.blade.php)
    return view('welcome');
});

Route::get('/meetings', 'App\Http\Controllers\MeetingsController@index')->middleware('auth.basic');
//changed this to the public page
Route::get('/meetings/{id}/public', 'App\Http\Controllers\MeetingsController@show')->middleware('auth.basic');
//public
//Route::get('/meetings/{id}', 'App\Http\Controllers\MeetingsController@rsvp')->middleware('auth.basic');
Route::get('/meetings/{id}', 'App\Http\Controllers\MeetingsController@privatepage')->middleware('auth.basic');
//private
