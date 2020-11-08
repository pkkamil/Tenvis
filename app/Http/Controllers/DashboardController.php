<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Tag;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        if (Auth::user()->role == 'Admin') {
            $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        } else {
            $posts = Auth::user()->posts()->paginate(4);
        }
        return view('loggedin.dashboard')->with('posts', $posts);
    }

    public function posts() {
        if (Auth::user() -> role == 'Reader') {
            return redirect('/dashboard');
        }
        $posts = Post::orderBy('created_at', 'desc')->get();
        $tags = Tag::all();
        return view('loggedin.user-posts', compact('posts', 'tags'));
    }

    public function users() {
        if (Auth::user() -> role == 'Admin') {
            $users = User::paginate(10);
            return view('loggedin.users-list', compact('users'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function writersRank() {
        $writers = User::get()->sortBy(function($q) {
            return count($q -> posts);
        });
        $writers = $writers->reverse();
        return view('loggedin.writers-rank', compact('writers'));
    }

    public function searchUser() {
        $search = $_GET['query'];
        $users = User::where('name', 'LIKE', '%'.$search.'%')->paginate(100);
        return view('loggedin.users-list', compact('users', 'search'));
    }
}
