<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable {

    use Notifiable;
    use EntrustUserTrait; // add this trait to your user model

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'first_name',
        'last_name', 
        'title', 
        'company',
        'language_code',
        'email',
        'gender', 
        'address',
        'address_2',
        'address_3',
        'phone',
        'birthdate',
        'state',
        'zipcode',
        'website',
        'facebook_url',
        'twitter_url',
        'twitter_token',
        'facebook_token',
        'gmail_token',
        'confirmation',
        'confirmation_code',
        'resetpassword_code',
        'invite_code',
        'invite_id',
        'password'
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
