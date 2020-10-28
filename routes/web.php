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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/author/{authorId}', 'UsersController@index');

Route::get('/blog', 'PostsController@index');

Route::get('/blog/post/{id}', 'PostsController@find');

// Route::get('/blog/post/{id}', function ($id) {
//     return view('post', compact('id'));
// });


