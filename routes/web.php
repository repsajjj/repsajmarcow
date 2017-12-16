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
   return view('welcome',['name'=>'Jasper']);
});

Route::get('/gear', function () {
    return view('gear');
 });



/*
Route::post('foo/bar', function () {
   return 'Hello World';
});

Route::put('foo/bar', function () {
   //
});

Route::delete('foo/bar', function () {
   ///
});*/
