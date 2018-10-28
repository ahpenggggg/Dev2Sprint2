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

Route::get('/addItem', function (){
  return view('pages.addItem');
});

Route::get('/editRecord', function(){
  return view('pages.editRecord');
});

Route::get('/displaySales', function(){
  return view('pages.displaySales');
}

Auth::routes();

Route::get('/pages/addItem', 'pagesController@item')->name('addItem');
Route::get('/pages/editRecord', 'pagesController@edit')->name('editRecord');
Route::get('/home', 'HomeController@index')->name('home');
