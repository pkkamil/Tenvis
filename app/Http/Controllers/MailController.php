<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactMail;
use App\Mail\RequestWriter;
use Illuminate\Support\Facades\Mail;
use App\User;

class MailController extends Controller {
    public function contact(Request $req) {
        $req->validate([
            'name' => 'required|string|max:16',
            'email' => 'required|email',
            'message' => 'required|max:255|min:25',
        ]);
        $details = [
            'name' => $req -> name,
            'email' => $req -> email,
            'body' => $req -> message,
        ];
        Mail::to('kennedy.pirello@gmail.com')->send(new ContactMail($details));
        return view('home-parts.success');
    }

    public function writerRequest() {
        if (Auth::user() -> role != 'Reader' or Auth::user() -> request_writer == 1) {
            return back();
        } else {
            $user = User::find(Auth::id());
            $user -> request_writer = 1;
            $user -> save();
            Mail::to('kennedy.pirello@gmail.com')->send(new RequestWriter(''));
            return back();
        }
    }
}
