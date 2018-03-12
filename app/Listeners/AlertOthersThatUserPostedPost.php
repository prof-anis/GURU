<?php

namespace App\Listeners;

use App\Events\UserPostedPost;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\SomeoneHasPosted;
use Auth;

class AlertOthersThatUserPostedPost
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserPostedPost  $event
     * @return void
     */
    public function handle(UserPostedPost $event)
    {    //first kill all necessary sessions 
        session(['post_to_reply'=>null]);
        Auth::user()->notify(new SomeoneHasPosted(array($event->data)));
        //dd(Auth::user()->notifications[0]->data);

    }
}
