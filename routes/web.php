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


Auth::routes();
Route::group(['middleware' => 'role:admin'], function() {
   
   Route::get('/admin', function() {

      return 'Welcome Admin';
      
   });

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testvue', function () {
   return view('testvue');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('add_role','HomeController@add_role');
Route::get('/roles', 'PermissionController@Permission');

// Categories
Route::get('/categories', 'CategoryController@show')->name('Categories');

