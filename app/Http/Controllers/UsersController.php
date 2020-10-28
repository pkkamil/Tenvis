<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index($authorId)
    {
        $author = User::where('id', $authorId)->firstOrFail();
        return view('author', compact('author'));
    }
}
