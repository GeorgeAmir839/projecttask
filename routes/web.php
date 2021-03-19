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

Route::get('/', function () {
    return view('welcome');
});









Route::resource('student','studentcontroller');
Route ::get('delete/{id}','studentcontroller@destroy');
Route ::get('showuser/{id}','studentcontroller@edit');
Route ::post('edit','studentcontroller@update');
Route::get('signin','studentcontroller@signin');
Route::post('login','studentcontroller@login');
Route::post('logout','studentcontroller@logout');


// Route::get('/',function (){

// return  view ('index');
// });