<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GestSalle extends Authenticatable
{
    use Notifiable;

    protected $guard = 'gestionnaire_salle';

    // protected $fillable = [
    //     'nom_gestionnaire', 'email_gestionnaire', 'password',
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

    public function salle()
    {
        return $this->hasOne('App\Models\Salles');
    }

    public function seance()
    {

        return $this->hasOne('App\Models\Seance');
    }

    public function chat()
    {

        return $this->hasMany('App\Models\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'interagir', 'id_gestionsalle', 'id_inspecteur');
    }
}
