<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'nom_admin', 'email_admin', 'password','prenom_admin','telephone_admin','adresse_admin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
