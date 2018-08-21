<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Client extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone', 'avatar', 'description'
    ];

    protected $hidden = [
        'password'
    ];
}
