<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DirecteurReg extends Authenticatable
{
    use Notifiable;

    protected $guard = 'directeur_reg';

    // protected $fillable = [
    //     'nom_dreg', 'email_dreg', 'password',
    // ];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enseignant()
    {
        return $this->hasMany('App\Modles\Enseignant');
    }

    public function etudient()
    {
        return $this->hasMany('App\Modles\Etudiant');
    }

    public function cours()
    {
        return $this->hasMany('App\Modles\Cours');
    }

    public function etablissement()
    {
        return $this->hasMany('App\Modles\Etablissement');
    }

    public function correction()
    {
        return $this->hasMany('App\Modles\Correction');
    }

    public function seance()
    {

        return $this->hasMany('App\Modles\Seance');
    }

    public function directeuprv()
    {
        return $this->hasMany('App\Modles\DirecteurProv');
    }

    public function inspecteurregionale()
    {
        return $this->hasMany('App\Modles\InspecteurReg');
    }

    public function gestionsalle()
    {
        return $this->hasMany('App\Modles\GestSalle');
    }

    public function parent()
    {
        return $this->hasMany('App\Modles\ParentTuteur');
    }

    public function salle()
    {
        return $this->hasMany('App\Modles\Salles');
    }

    public function chat()
    {

        return $this->hasMany('App\Modles\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Modles\Conference');
    }
}
