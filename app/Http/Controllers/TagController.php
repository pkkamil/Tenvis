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
            'name' => 'required|alpha|unique:tags'
        ]);
        $tag = new Tag;
        $tag -> name = $req -> name;
        $tag -> save();
        return redirect(url() -> previous());
    }

    public function destroy($id) {
        Tag::destroy($id);
    }
}
