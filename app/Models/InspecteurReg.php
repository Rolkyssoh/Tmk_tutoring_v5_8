<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class InspecteurReg extends Authenticatable
{
    use Notifiable;

    protected $guard = 'inspecteur_reg';

    protected $fillable = [
        'nom_inspect', 'email_inspect', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }

    public function agenda()
    {
        return $this->hasOne('App\Models\Agenda');
    }

    public function chat()
    {

        return $this->hasMany('App\Models\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }

    public function enseignant()
    {

        return $this->belongsToMany('App\Models\Enseignant', 'enseignant_inspecteur', 'id_inspecteur', 'id_enseignant');
    }

    public function cours()
    {

        return $this->belongsToMany('App\Models\Cours', 'interagir', 'id_inspecteur', 'id_cours');
    }

    public function etablissement()
    {

        return $this->belongsToMany('App\Models\Etablissement', 'inspecteur_etablissement', 'id_inspecteur', 'id_etablissement');
    }

    public function correction()
    {

        return $this->belongsToMany('App\Models\Correction', 'interagir', 'id_inspecteur', 'id_correction');
    }

    public function seance()
    {

        return $this->belongsToMany('App\Models\Seance', 'interagir', 'id_inspecteur', 'id_seance');
    }

    public function test()
    {

        return $this->belongsToMany('App\Models\Test', 'inspecteur_test', 'id_inspecteur', 'id_test');
    }

    public function activiter()
    {

        return $this->belongsToMany('App\Models\Activiter', 'inspecteur_activiter', 'id_inspecteur', 'id_activiter');
    }

    public function gestionsalle()
    {

        return $this->belongsToMany('App\Models\GestSalle', 'interagir', 'id_inspecteur', 'id_gestionsalle');
    }
}
