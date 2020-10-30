<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/author/{authorId}', 'UserController@index');
Route::get('/blog', 'PostController@index');
Route::get('/blog/post/{id}', 'PostController@find');

// AUTH

Route::post('/dashboard/save', 'UserController@saveNote')->name('saveNote');
Route::get('/dashboard/editor', 'PostController@create')->name('editor');
Route::post('/dashboard/editor/create', 'PostController@store')->name('createPost');
Route::post('/dashboard/editor/tag/create', 'TagController@create')->name('newTag');
Route::get('/dashboard/posts', function() {
    if (Auth::user()) {
        if (Auth::user() -> hasVerifiedEmail()) {
            $posts = Auth::user() -> posts;
            return view('loggedin.user-posts')->with('posts', $posts);
        }
    }
})->name('user_posts');
Route::get('/dashboard/account', function() {
    if (Auth::user()) {
        if (Auth::user() -> hasVerifiedEmail()) {
            return view('loggedin.account');
        }
    }
})->name('account');

// Route::get('/blog/post/{id}', function ($id) {
//     return view('post', compact('id'));
// });


Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');
