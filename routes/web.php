<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

// Route::get('/post/{id}/{name}/{password}', '\App\Http\Controllers\PostController@post');
// Route::get('/contact', '\App\Http\Controllers\PostController@contact');

/*
    Application Routes
*/
// Route::get('/insert', function() {
//     DB::insert('insert into posts(id,title, content, is_admin) values(?, ?, ?, ?)', ['1', 'JS', 'JS is the best thing that has happened to PHP', '1']);
// });

// Route::get('/read', function() {
//     $results = DB::select('select * from posts');

//     dd($results);
//     // foreach($results as $post){
//     //     return $post->title;
//     // }
// });

// Route::get('/update', function() {

//     $updated = DB::update('update posts set title ="updated title" where id=?', [1]);
//     $updated = DB::update('update posts set content ="content no 1" where id=?', [1]);
//     $updated = DB::update('update posts set is_admin ="1" where id=?', [1]);


//     $results = DB::select('select * from posts where id =?', [1]);

//     dd($results);

// });


// Route::get('/delete', function() {
//     DB::delete('delete from posts where id=?', [1]);

//     $results = DB::select('select * from posts where id =?', [1]);

//     dd($results);

// });


/*
[-------------------------------------------------------------------
[    Eloquent / ORM
[-------------------------------------------------------------------
*/

// Route::get('/read', function() {
//     $posts = Post::all();
//     dd($posts);
// });

// Route::get('/find', function() {
//     $posts = Post::find(2);
//     dd($posts);
// });

// Route::get('/findwhere', function() {
//     $posts = Post::where('id', 1)->orderBy('id', 'asc')->take(1)->get();
//     dd($posts);
// });

// Route::get('/findmore', function() {
//     $posts = Post::findOrFail(1);
//     dd($posts);

//     // $posts = Post::where('users_count', '<', 50)->firstOrFail();
//     // dd($posts);
// });

// Route::get('/basicinsert', function () {
//     $posts = new Post;
//     $posts->title = 'New Eloquent Title';
//     $posts->content = 'Eloquent is really cool';
//     $posts -> is_admin = 1;

//     $posts -> save();
// });

// Route::get('/basicinsert2', function () {
//     $posts = Post::find(2);
//     $posts->title = 'New Eloquent Title for no 2';
//     // $posts->content = 'Eloquent is really cool for no 2';
//     $posts -> is_admin = 1;

//     $posts -> save();
// });

// Route::get('/create', function () {
//     Post::create([
//         'title'=>'The create method',
//         'content'=>'I am learning eloquent',
//         'is_admin'=>1
//     ]);
// });

// Route::get('/update', function () {
//     Post::where('id',2)->where('is_admin',1)->update([
//         'title'=>'New PHP Title',
//         'content'=>'I love Programming'
//     ]);
// });

// Route::get('/delete', function () {
//     $posts = Post::find(1);
//     $posts -> delete();
// });

// Route::get('/softdelete', function(){
//     Post::find(1)->delete();
// });

// Route::get('/readsoftdelete', function(){
//     // $posts = Post::find(1);
//     // dd($posts);

//     $posts = Post::onlyTrashed()->get();
//     dd($posts);
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('id',1)->restore();
// });

// Route::get('/forcedelete', function () {
//     Post::withTrashed()->where('id', 1)->forceDelete();
    // Post::onlyTrashed()->where('id', 1)->forceDelete(); //only delete  softdeleted items
// });




