<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function enseignant()
    {
        return $this->hasMany('App\Models\Enseignant');
    }

    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }

    public function inspecteurregionale()
    {
        return $this->hasMany('App\Models\InspecteurReg');
    }
}
