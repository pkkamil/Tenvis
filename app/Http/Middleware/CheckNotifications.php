<?php

namespace App\Http\Middleware;

use App\Notification;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckNotifications {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
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
            } else {
                return $next($request);
            }
            // return redirect('/')->with('notification', $notification);
            return $next($request);
        }
        abort(403);
    }
}
