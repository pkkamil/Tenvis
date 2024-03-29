<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\Notify;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $notifications = Notification::where('user_id', Auth::id())->orderBy('created_at', 'desc') -> paginate(5);
        return view('loggedin.notifications', compact('notifications'));
    }

    public function toggleStatus($id) {
        $notification = Notification::find($id);
        if ($notification -> unread) {
            $notification -> unread = 0;
        } else {
            $notification -> unread = 1;
        }
        $notification -> save();
        return redirect(url()->previous());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($profileId) {
        $user = User::find($profileId);
        return view('loggedin.send-message', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req) {
        $req->validate([
            'message' => 'required|string|max:1000',
        ]);
        $notifi = new Notification;
        $notifi -> title = 'New message from '.Auth::user() -> name;
        $notifi -> message = $req -> message;
        $notifi -> sender = Auth::id();
        $notifi -> user_id = $req -> profileId;
        $notifi -> save();

        $notification = (object)array(
            'title' => 'Your message has been sent',
            'message' => 'View your inbox',
            'type' => 'message',
        );
        event(new Notify((int) $req -> profileId, $notifi -> title, $req -> message));
        return redirect('/profile/'.$req -> profileId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $singleMessage = Notification::find($id);
        return view('loggedin.single-message', compact('singleMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Notification::destroy($id);
        return redirect('/dashboard/notifications');
    }

    public function notify() {
        if (Auth::user()) {
            $notifications = Notification::where('user_id', Auth::id())->get();
            $nts = [];
            foreach($notifications as $notifi) {
                if ($notifi -> informed == 0) {
                    array_push($nts, $notifi);
                }
            }
            if (count($nts) > 1) {
                $notification = (object)array(
                    'title' => 'You have some new messages',
                    'message' => 'View your inbox',
                    'type' => 'message',
                );
            } else if (count($nts) == 1) {
                $notification = (object)array(
                    'title' => $notifications -> title,
                    'message' => 'View your inbox',
                    'type' => 'message',
                );
            } 
        }
    }
}
