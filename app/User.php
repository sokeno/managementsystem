<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
=======
>>>>>>> origin/master
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
<<<<<<< HEAD
    use Notifiable;

=======
>>>>>>> origin/master
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
