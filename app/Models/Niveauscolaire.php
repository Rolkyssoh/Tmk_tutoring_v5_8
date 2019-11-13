<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveauscolaire extends Model
{

    public function etudient()
    {
        return $this->hasMany('App\Models\Etudient');
    }

    function seance()
    {

        return $this->hasMany('App\Models\Seance');
    }

    public function enseignant()
    {

        return $this->belongsToMany('App\Models\Enseignant', 'enseignant_niveauscolaire', 'id_niveauscolaire', 'id_enseignant');
    }

    public function filiere()
    {

        return $this->belongsToMany('App\Models\Filiere', 'filiere_niveauscolaire', 'id_niveauscolaire', 'id_filiere');
    }
}
