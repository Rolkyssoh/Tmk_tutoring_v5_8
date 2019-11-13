<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salles extends Model
{
    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\Models\DirecteurProv');
    }

    public function etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement');
    }

    function seance()
    {
        return $this->belongsTo('App\Models\Seance');
    }

    public function gestionsalle()
    {
        return $this->hasOne('App\Models\GestSalle');
    }

    public function agenda()
    {
        return $this->hasOne('App\Models\Agenda');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_salle', 'id_admin');
    }
}
