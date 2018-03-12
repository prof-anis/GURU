<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notification\SomeoneHasLiked;

class User extends Authenticatable
{
    use Notifiable;

  //  $user->notify(new BoardNotification('hhh'));
   // Notification::send('anis',new BoardNotification('jj'));

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
