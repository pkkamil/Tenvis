<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::post('/contact/send', 'MailController@contact');

Route::get('/login', function () {
    return view('login');
});

Route::get('/blog', 'PostController@index');
Route::get('/blog/post/{id}', 'PostController@find');
Route::get('/profile/{profileId}', 'UserController@index');
Route::get('/blog/author/{profileId}', 'PostController@authorPosts');
Route::post('/comments/add', 'PostController@addComment')->name('addComment');

// AUTH

Route::post('/dashboard/save', 'UserController@saveNote')->name('saveNote');
Route::get('/dashboard/editor', 'PostController@create')->name('editor');
Route::post('/dashboard/editor/create', 'PostController@store')->name('createPost');
Route::post('/dashboard/editor/tag/create', 'TagController@create')->name('newTag');
Route::get('/dashboard/posts', 'DashboardController@posts')->name('userPosts');
Route::get('/dashboard/users', 'DashboardController@users')->name('manageUsers');
Route::post('/dashboard/account/edit/save', 'UserController@edit')->name('editAccount');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::view('/dashboard/account', 'loggedin.account')->name('account');
    Route::view('/dashboard/account/edit', 'loggedin.account-edit');
    Route::view('/dashboard/account/delete', 'loggedin.confirmation');
    Route::post('/dashboard/account/delete/confirm', 'UserController@delete')->name('deleteUser');
});


// Route::get('/blog/post/{id}', function ($id) {
//     return view('post', compact('id'));
// });


Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

