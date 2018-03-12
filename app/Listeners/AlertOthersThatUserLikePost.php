<?php

namespace App\Listeners;

use App\Events\UserLikePost;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;
use App\Notifications\SomeoneHasLiked;

class AlertOthersThatUserLikePost
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
     * @param  UserLikePost  $event
     * @return void
     */
    public function handle(UserLikePost $event)
    {
        Auth::user()->notify(new SomeoneHasLiked($event->data));
    }
}
