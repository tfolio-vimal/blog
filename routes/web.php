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
use App\Task;
Route::get('/','PostsController@index')->name('home');
Route::get('/home','PostsController@index');
Route::get('/posts','PostsController@index');
Route::post('/posts','PostsController@store');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::get('/posts/user/{user}','PostsController@userposts');
Route::get('/posts/tags/{tag}','TagsController@index');
//Route::post('/posts','PostsController@store');
/* Route::get('/',function(){
    return view('posts.index');
}); */
Route::get('/tasks','TasksController@index');
Route::get('/tasks/{task}','TasksController@show');
/*Route::get('/tasks', function () {
    //$tasks = DB::table('tasks')->get();
    $tasks = task::all();
    return view('tasks.index',compact('tasks'));
});
Route::get('/tasks/{id}', function ($id) {
    $task = task::find($id);
    return view('tasks.show',compact('task'));
});*/

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');
