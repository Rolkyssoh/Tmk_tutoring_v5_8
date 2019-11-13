<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    public function salle()
    {
        return $this->hasMany('App\Models\Salles');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\Models\DirecteurProv');
    }

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }
    public function filiere()
    {

        return $this->belongsToMany('App\Models\Filiere', 'etablissement_filiere', 'id_etablissement', 'id_filiere');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_etablissement', 'id_admin');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'etablissement_inspecteur', 'id_etablissement', 'id_inspecteur');
    }
}
