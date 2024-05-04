<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Tag;

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
//     DB::insert('insert into posts(id,user_id, title, content, is_admin) values(?, ?, ?, ?, ?)', ['10', '10', 'JS10', 'JS10 is the best thing that has happened to PHP', '1']);
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

// Route::get('/basicinsert', function () {
//     $roles = new Role;
//     $roles->name = 'J';

//     $roles -> save();
// });

// Route::get('/basicinsert', function () {
//     $countries = new Country;
//     $countries->name = 'Taipei';

//     $countries -> save();
// });

// Route::get('/basicinsert', function () {
//     $photos = new Photo;
//     $photos->path = 'img10.jpg';
//     $photos->imageable_id = 10;
//     $photos->imageable_type = 'App\Models\User';

//     $photos -> save();
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
//     for($a=0 ; $a <= 10 ; $a++){
//     Post::where('id',$a)->where('is_admin',1)->update([
//         'created_at'=>now(),
//     ]);}
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


/*
[-------------------------------------------------------------------
[    Eloquent Relationships - one to one
[-------------------------------------------------------------------
*/

// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post;
// });


// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user;
// });



/*
[-------------------------------------------------------------------
[    Eloquent Relationships - one to many
[-------------------------------------------------------------------
*/

// Route::get('/posts',function(){
//     $user = User::find(10);
//     foreach($user->posts as $post)
//     {
//         echo $post->title."<br>";
//     }

// });

/*
[-------------------------------------------------------------------
[    Eloquent Relationships - many to many
[-------------------------------------------------------------------
*/

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id);
//     foreach($user->roles as $role)
//     {
//         return $role->name;
//     }
// });

// Route::get('/user/{id}/pivot', function($id){
//     $user = User::find($id);
//     foreach($user->roles as $role)
//     {
//         return $role->pivot->created_at;
//     }
// });

/*
[-------------------------------------------------------------------
[    Eloquent Relationships - has many through
[-------------------------------------------------------------------
*/

// Route::get('/user/country', function () {
//     $country = Country::find(4);

//     foreach($country->posts as $post)
//     {
//         echo $country->name."<br>";
//         return $post->title;
//     }

// });

/*
[-------------------------------------------------------------------
[    Eloquent Relationships - Polymorphic
[-------------------------------------------------------------------
*/

// Route::get('/photo', function() {
//     $post = Post::find(2);

//     foreach($post->photos as $photo)
//     {
//         echo $photo."<br>";
//     }

// });

// Route::get('/user/{id}', function($id) {
//     $photo = Photo::findOrFail($id);

//     return $photo->imageable;

// });

/*
[-------------------------------------------------------------------
[    Eloquent Relationships - Polymorphic many to many
[-------------------------------------------------------------------
*/

// Route::get('/video', function(){
//     $video = Tag::findOrFail(2);

//     foreach($video->posts as $posts)
//     {
//         return $posts;
//     }
// });

/*
[-------------------------------------------------------------------
[    Eloquent Relationships - Tinker
[-------------------------------------------------------------------
*/
//Add data
// $post = App\Models\Post::create(['title'=>'PHP post from Tinker', 'content'=>'PHP content from tinker']);

//set an object
// $post = App\Models\Post::find(3)

// updating an element
// $post->content = " message ";

// save the uodate into DB
// $post->save()

// delete the item - softdelete
// $post->delete()

// permanently delete
// $post = App\Models\Post::onlyTrashed()
// $post->forceDelete()



















