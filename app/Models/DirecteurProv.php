<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DirecteurProv extends Authenticatable
{
    use Notifiable;

    protected $guard = 'directeur_prov';

    // protected $fillable = [
    //     'nom_dr_prov', 'email_dr_prov', 'password',
    // ];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function enseignant()
    {
        return $this->hasMany('App\Models\Enseignant');
    }

    public function etablissement()
    {
        return $this->hasMany('App\Models\Etablissement');
    }

    public function correction()
    {
        return $this->hasMany('App\Models\Correction');
    }

    public function seance()
    {

        return $this->hasMany('App\Models\Seance');
    }

    public function gestionsalle()
    {
        return $this->hasMany('App\Models\GestSalle');
    }

    public function parent()
    {

        return $this->hasMany('App\Models\ParentTuteur');
    }

    public function salle()
    {
        return $this->hasMany('App\Models\Salles');
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

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_dirprovinciale', 'id_admin');
    }
}
