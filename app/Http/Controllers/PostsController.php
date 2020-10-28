<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $authors = User::orderBy('created_at', 'desc')->get();
        return view('blog', compact('posts', 'authors'));
    }
    public function find($id) {
        $post = Post::find($id);
        $author = User::find($post->user_id);
        $comments = Comment::where('post_id', $id)->get();

        return view('post', compact('post', 'comments', 'author'));
    }
}
