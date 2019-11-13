<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    use Notifiable;

    protected $guard = 'etudiant';

    // protected $fillable = [
    //     'nom_etudiant', 'email_etudiant', 'password',
    // ];
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function niveauscolaire()
    {
        return $this->belongsTo('App\Models\Niveauscolaire');
    }

    public function note()
    {
        return $this->hasMany('App\Models\Note');
    }

    public function agenda()
    {
        return $this->belongsTo('App\Models\Agenda');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\ParentTuteur');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }
    public function chat()
    {

        return $this->hasMany('App\Models\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }

    public function seance()
    {

        return $this->belongsToMany('App\Models\Seance', 'etudient_seance', 'id_etudient', 'id_seance');
    }

    public function activiter()
    {

        return $this->belongsToMany('App\Models\Activiter', 'etudient_activiter', 'id_etudient', 'id_activiter');
    }

    public function correction()
    {

        return $this->belongsToMany('App\Models\Correction', 'etudient_correction', 'id_etudient', 'id_correction');
    }
    public function test()
    {

        return $this->belongsToMany('App\Models\Test', 'etudient_test', 'id_etudient', 'id_test');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_etudient', 'id_admin');
    }
}
