<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified'])->except('index');
    }

    public function index($profileId) {
        $profile = User::find($profileId);
        return view('profile', compact('profile'));
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

    public function editPage() {

    }

    public function edit(Request $req) {
        $req -> telephone = (int)$req -> telephone;
        $req->validate([
            'avatar' => ['nullable','image', 'max:10240'],
            'name' => ['required', 'string', 'min:2', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'age' => ['nullable','numeric', 'max:120'],
            'telephone' => ['nullable', 'numeric'],
        ]);
        $user = User::find(Auth::id());
        $user -> name = $req -> name;
        $user -> email = $req -> email;
        $user -> age = $req -> age;
        $user -> telephone = $req -> telephone;
        if($req -> avatar != null) {
            $img_name = Str::random(30);
            $extension = $req -> avatar -> extension();
            $req -> avatar -> storeAs('/public', "avatar/".$img_name.".".$extension);
            $avatar = Storage::url("avatar/".$img_name.".".$extension);
            $user->avatar = $avatar;
        }
        $user->save();
        return redirect('/dashboard/account');
    }

    public function editOtherUser($profileId) {
        $user = User::find($profileId);
        return view('loggedin.user-edit', compact('user'));
    }

    public function editUser(Request $req) {
        $req -> telephone = (int)$req -> telephone;
        $req->validate([
            'avatar' => ['nullable','image', 'max:10240'],
            'name' => ['required', 'string', 'min:2', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'age' => ['nullable','numeric', 'max:120'],
            'telephone' => ['nullable', 'numeric'],
        ]);
        $user = User::find($req -> profileId);
        $user -> name = $req -> name;
        $user -> email = $req -> email;
        $user -> age = $req -> age;
        $user -> telephone = $req -> telephone;
        if($req -> avatar != null) {
            $img_name = Str::random(30);
            $extension = $req -> avatar -> extension();
            $req -> avatar -> storeAs('/public', "avatar/".$img_name.".".$extension);
            $avatar = Storage::url("avatar/".$img_name.".".$extension);
            $user->avatar = $avatar;
        }
        $user->save();
        return redirect('/profile/'.$req -> profileId);
    }

    public function delete() {
        Auth::user()->delete();
        return redirect('/');
    }

    public function deleteOtherUser(Request $req) {
        User::find($req -> profileId)->delete();
        return redirect('/dashboard/users');
    }

    public function message() {
        $notification = (object)array(
            'title' => 'New message from Kamil',
            'message' => 'Hello bro! Can you tell me how to add a post?',
            'alert-type' => 'message',
        );
        return view('home', compact('notification'));
    }

}
