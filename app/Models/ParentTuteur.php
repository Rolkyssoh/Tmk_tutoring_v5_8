<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ParentTuteur extends Authenticatable
{
    use Notifiable;

    protected $guard = 'parent_tuteur';

    // protected $fillable = [
    //     'nom_parent', 'email_parent', 'password',
    // ];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\Models\DirecteurProv');
    }

    public function agenda()
    {
        return $this->hasMany('App\Models\Agenda');
    }

    public function etudient()
    {
        return $this->hasMany('App\Models\Etudiant');
    }

    public function chat()
    {

        return $this->hasMany('App\Models\Chats');
    }

    public function conference()
    {
        return $this->hasOne('App\Models\Conference');
    }

    public function admin()
    {
        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_parent', 'id_admin');
    }
}
