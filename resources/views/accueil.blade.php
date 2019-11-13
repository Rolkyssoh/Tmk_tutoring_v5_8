@extends('layouts.default')

@section('content')
    <div class="row" style="margin:20px">
        {{--  etudiant  --}}
        <div class="col-sm-3 mycenter">
          <div class="card">
            <div class="card-body">
                  <h5 class="card-title">  Etudiant</h5>
              <img src="/image/eleve.jpg" height="100px" width="100px"> <br><br>
               <a href="/register/etudiant" class="btn btn-primary">S'inscrire</a>
            </div>
          </div><br>
        </div>
        {{--  enseignant  --}}
        <div class="col-sm-3 mycenter" >
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Enseignant</h5>
              <img src="/image/enseignant.png" height="100px" width="100px"> <br><br>
              <a href="/register/enseignant" class="btn btn-primary">S'incrire</a>
            </div>
          </div>
        </div>
        {{--  inspecteur  --}}
        <div class="col-sm-3 mycenter">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Inspecteur Regionale </h5>
              <img src="/image/inspecteur.png" height="100px" width="100px"> <br><br>
              <a href='/register/inspecteur'  class="btn btn-primary">S'inscrire</a>
            </div>
          </div><br>
        </div>
        {{--  Directeur prov  --}}
        <div class="col-sm-3 mycenter" >
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Directeur Provinciale</h5>
              <img src="/image/directeurprv.png" height="100px" width="100px"> <br><br>
              <a href='/register/directeur_prov' class="btn btn-primary">S'inscrire</a>
            </div>
          </div>
        </div>
        {{--  Directeur Reg  --}}
        <div class="col-sm-3 mycenter">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Directeur Regionale</h5>
              <img src="/image/directeurprv.png" height="100px" width="100px"> <br><br>
              <a href="/register/directeur_reg" class="btn btn-primary">S'inscrire</a>
            </div>
          </div>
        </div> 
        {{--  Parent  --}}
        <div class="col-sm-3 mycenter">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Parent</h5>
              <img src="/image/parent.png" height="100px" width="100px"> <br><br>
              <a href="/register/parent_tut" class="btn btn-primary">S'inscrire</a>
            </div>
          </div>
        </div>
          {{--  Gestionnaire salles  --}}
        <div class="col-sm-3 mycenter">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gestionnaire des salles</h5>
              <img src="/image/gestionsalle.png" height="100px" width="100px"> <br><br>
              <a href="/register/gestionnaire" class="btn btn-primary">S'inscrire</a>
            </div>
          </div>
        </div>  


    </div>
@stop 