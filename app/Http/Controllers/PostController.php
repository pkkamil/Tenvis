<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $authors = User::all();
        $tags = Tag::all();
        return view('blog', compact('posts', 'authors', 'tags'));
    }
    public function find($id) {
        $post = Post::find($id);
        $author = User::find($post->user_id);
        $comments = Comment::where('post_id', $id)->get();

        return view('post', compact('post', 'comments', 'author'));
    }
    public function create() {
        $tags = Tag::all();
        return view('loggedin.editor', compact('tags'));
    }

    public function store(Request $req) {
        $req->validate([
            'title' => 'required|min:5|max:50',
            'tag' => 'required',
            'content' => 'required|max:1000|string',
            'image' => 'required|image|max:10240',
            'divider' => 'nullable|image|max:10240',
        ]);
        // Image
        $img_name = Str::random(30);
        $extension = $req -> image -> extension();
        $req -> image -> storeAs('/public', $img_name."-bg.".$extension);
        $url_bg = Storage::url($img_name."-bg.".$extension);
        // Divider
        if ($req -> divider) {
            $extension = $req -> divider -> extension();
            $req -> divider -> storeAs('/public', $img_name."-dv.".$extension);
            $url_dv = Storage::url($img_name."-dv.".$extension);
        }
        $post = new Post;
        $post -> user_id = Auth::user()->id;
        $post -> tag_id = $req -> tag;
        $post -> title = $req -> title;
        $post -> image = $url_bg;
        // $post -> divider = $url_dv;
        $post -> content = $req -> content;
        $post -> save();
        return $post;
    }
}
