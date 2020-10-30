<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index() {

    }

    public function create(Request $req) {
        $req -> validate([
            'newTag' => 'required|alpha'
        ]);
        $tag = new Tag;
        $tag -> name = $req -> newTag;
        $tag -> save();
        return redirect('/dashboard/editor');
    }
}
