<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

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
}
