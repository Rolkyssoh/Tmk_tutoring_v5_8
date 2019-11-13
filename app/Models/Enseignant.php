<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Enseignant extends Authenticatable
{
    use Notifiable;

    protected $guard = 'enseignant';

    // protected $fillable = [
    //     'nom_enseignant', 'email_enseignant', 'password',
    // ];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function agenda()
    {
        return $this->hasOne('App\Models\Agenda');
    }

    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }

    public function activiter()
    {
        return $this->hasMany('App\Models\Activiter');
    }


    public function seance()
    {
        return $this->hasMany('App\Models\Seance');
    }

    public function note()
    {
        return $this->hasMany('App\Models\Note');
    }

    public function Correction()
    {
        return $this->hasMany('App\Models\Correction');
    }

    public function chat()
    {

        return $this->hasMany('App\Models\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }

    public function test()
    {

        return $this->belongsToMany('App\Models\Test', 'enseignant_test', 'id_enseignant', 'id_test');
    }

    public function niveauscolaire()
    {

        return $this->belongsToMany('App\Models\NiveauScolaire', 'enseignant_niveauscolaire', 'id_enseignant', 'id_niveauscolaire');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_enseignant', 'id_admin');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'enseignant_inspecteur', 'id_enseignant', 'id_inspecteur');
    }
}
