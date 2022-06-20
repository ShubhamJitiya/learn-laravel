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

//Send data to view and access there
Route::get('/demo/{name}/{id?}', function($name, $id = null){ 
   $data = compact('name', 'id'); //Array, takes var names as parameter
   return view('demo')->with($data);
});


Route::post('/test', function(){
    echo "can't be accessed, can be used with form & postman";
});

Route::any('/getpost', function(){
    echo "can be get or post, not a valid method - provided by laravel";
});
Route::put('/getpost', function(){
    echo "Other methods are put, patch & delete";
});

/* 
1. Routing files
2. How to manage
3. Custom routes
*/


