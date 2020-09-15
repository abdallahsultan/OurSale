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

Route::get('/controlpanel', 'ControlPanelController@index')->name('ControlPanel');


Route::get('add_role','ControlPanelController@add_role');
Route::get('/roles', 'PermissionController@Permission');

// Categories

 Route::post('/addcategory', 'CategoryController@store')->name('addcategory');
 //Route::resource('categories', 'CategoryController');
