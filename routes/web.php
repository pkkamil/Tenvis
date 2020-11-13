<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Tag;

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

Route::get('/blog/post/{id}/delete/confirmation', 'PostController@destroy');
Route::get('/profile/{profileId}', 'UserController@index')->name('profile');
Route::get('/blog/author/{profileId}', 'PostController@authorPosts');
Route::post('/comments/add', 'PostController@addComment')->name('addComment');

// AUTH

Route::get('/dashboard/notifications', 'NotificationController@index')->name('notifications');
Route::get('/dashboard/notifications/{id}/toggle', 'NotificationController@toggleStatus');
Route::get('/dashboard/notifications/{id}/delete', 'NotificationController@destroy');
Route::get('/dashboard/notifications/{id}', 'NotificationController@show');
Route::post('/dashboard/save', 'UserController@saveNote')->name('saveNote');
Route::get('/dashboard/editor', 'PostController@create')->name('editor');
Route::post('/dashboard/editor/create', 'PostController@store')->name('createPost');
Route::post('/dashboard/editor/tag/create', 'TagController@create')->name('newTag');
Route::get('/dashboard/reports', 'DashboardController@reports')->name('reports');
Route::get('/dashboard/reports/{id}', function($id) {
    $report = App\Report::find($id);
    return view('loggedin.single-report', compact('report'));
});
Route::get('/dashboard/reports/{id}/delete', function($id) {
    App\Report::destroy($id);
    return redirect('/dashboard/reports');
});
Route::get('/dashboard/posts', 'DashboardController@posts')->name('userPosts');
Route::get('/dashboard/users', 'DashboardController@users')->name('manageUsers');
Route::get('/dashboard/users/search', 'DashboardController@searchUser')->name('searchUser');
Route::get('/dashboard/users/rank', 'DashboardController@writersRank')->name('writersRank');
Route::post('/dashboard/account/edit/save', 'UserController@edit')->name('editAccount');
Route::post('/profile/edit/save', 'UserController@editUser')->name('editUser');
Route::post('/blog/post/edit/save', 'PostController@editPost')->name('editPost');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/blog/post/{postId}/edit', function($postId) {
        if (Auth::user() -> role == 'Admin') {
            $post = Post::find($postId);
            $tags = Tag::all();
            return view('loggedin.edit-post', compact('post', 'tags'));
        } else {
            return view('account');
        }
    });
    Route::get('/blog/post/{id}/delete', function($id) {
        if (Auth::user() -> role == 'Admin') {
            $post = Post::find($id);
            return view('loggedin.delete-post', compact('post'));
        } else {
            return redirect('/blog/post/'.$id);
        }
    });
    Route::post('/post/delete/confirm', 'PostController@destroy')->name('deletePost');
    Route::get('/blog/post/{id}/report', function($id) {
        $post = Post::find($id);
        return view('loggedin.report-post', compact('post'));
    });
    Route::post('/post/report/confirm', 'PostController@report')->name('reportPost');
    Route::get('/profile/{profileId}/edit', 'UserController@editOtherUser');
    Route::get('/profile/{profileId}/delete', function($profileId) {
        if (Auth::user() -> role == 'Admin') {
            $user = User::find($profileId);
            return view('loggedin.delete-user', compact('user'));
        } else {
            return view('account');
        }
    });
    Route::get('/profile/{profileId}/report', function($profileId) {
        $user = User::find($profileId);
        return view('loggedin.report-user', compact('user'));
    });
    Route::post('/profile/report/confirm', 'UserController@report')->name('reportUser');
    Route::get('/profile/{profileId}/message', 'NotificationController@create');
    Route::post('/send-message', 'NotificationController@store')->name('send');
    Route::view('/dashboard/account', 'loggedin.account')->name('account');
    Route::view('/dashboard/account/change-password', 'loggedin.change-password');
    Route::post('/change-password', 'ChangePasswordController@store')->name('change-password');
    Route::view('/dashboard/account/edit', 'loggedin.edit-account');
    Route::view('/dashboard/account/delete', 'loggedin.confirmation');
    Route::post('/dashboard/account/delete/confirm', 'UserController@delete')->name('deleteUser');
    Route::post('/profile/delete/confirm', 'UserController@deleteOtherUser')->name('deleteOtherUser');
});


// Route::get('/blog/post/{id}', function ($id) {
//     return view('post', compact('id'));
// });


Auth::routes(['verify' => true]);


Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

Route::get('/toast', 'UserController@message');

