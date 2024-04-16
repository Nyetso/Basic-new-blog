<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "About Page";
// });

// Route::get('/contact', function() {
//     return "Contacts page";
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number ".$id. " ".$name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home' ,function () {
//     $url = route('admin.home');

//     return " This URL is ".$url;
// }));

// Route::get('/post/{id}', '\App\Http\Controllers\PostController@index');
// Route::resource('post', '\App\Http\Controllers\PostController');

Route::get('/post/{id}/{name}/{password}', '\App\Http\Controllers\PostController@post');
Route::get('/contact', '\App\Http\Controllers\PostController@contact');




