<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name_admin', 'email_admin', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }

    public function enseignant()
    {

        return $this->belongsToMany('App\Models\Enseignant', 'gerer', 'id_admin', 'id_enseignant');
    }

    public function cours()
    {

        return $this->belongsToMany('App\Models\Cours', 'gerer', 'id_admin', 'id_cours');
    }


    public function etablissement()
    {

        return $this->belongsToMany('App\Models\Etablissement', 'gerer', 'id_admin', 'id_etablissement');
    }

    public function correction()
    {

        return $this->belongsToMany('App\Models\Correction', 'gerer', 'id_admin', 'id_correction');
    }

    public function seance()
    {

        return $this->hasMany('App\Models\Seance');
    }


    public function directeurprv()
    {

        return $this->belongsToMany('App\Models\DirecteurProv', 'gerer', 'id_admin', 'id_dirprovinciale');
    }

    public function parent()
    {

        return $this->belongsToMany('App\Models\ParentTuteur', 'gerer', 'id_admin', 'id_parent');
    }

    public function salle()
    {

        return $this->belongsToMany('App\Models\Salles', 'gerer', 'id_admin', 'id_salle');
    }
}
