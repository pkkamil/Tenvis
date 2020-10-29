<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->except('index');
    }

    public function index($authorId)
    {
        $author = User::find($authorId);
        return view('author', compact('author'));
    }

    public function options() {
        User::find(Auth::id());
        return view('account');
    }

    public function saveNote(Request $req) {
        $note = $req -> notes;
        $userNote = User::find(Auth::id());
        $userNote->note = $note;
        $userNote->save();
        return redirect('/dashboard');
    }

    public function edit(Request $req) {
        $req->validate([
            'name' => 'required|min:2|max:16|alpha_num',
            // 'email' => 'required|email',
            'image' => 'nullable|image|max:2048'
        ]);
        $user = User::find(Auth::id());
        $user->name = $req -> name;
        if($req -> image != null) {
            $img_name = Str::random(30);
            $extension = $req -> image -> extension();
            $req -> image -> storeAs('/public', $img_name.".".$extension);
            $avatar = Storage::url($img_name.".".$extension);
            $user->avatar = $avatar;
        }
        $user->save();
        return redirect('/dashboard/account');
    }

    public function delete() {
        Auth::user()->delete();
        return redirect('/');
    }
}
