<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {

    }

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
}
