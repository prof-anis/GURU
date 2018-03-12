<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Notification\SomeoneHasPosted;


class Talk

 extends Model
{
    use Notifiable;
}
