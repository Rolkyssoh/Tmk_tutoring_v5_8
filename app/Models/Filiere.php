<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public function etablissement()
    {

        return $this->belongsToMany('App\Models\Etablissement', 'etablissement_filiere', 'id_filiere', 'id_etablissement');
    }

    public function niveauscolaire()
    {

        return $this->belongsToMany('App\Models\Niveauscolaire', 'filiere_niveauscolaire', 'id_filiere', 'id_niveauscolaire');
    }
}
