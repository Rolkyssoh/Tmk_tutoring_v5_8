@extends('welcome')

@section('content')


<style>

.mytitle{

text-align: center;

}

</style>

<div class="container" > 
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                    <div class="card-header"> 
                            <h1 class="mytitle">Create Etudient</h1>  
                   </div>  <br>
                    <div class="card-body">  
    
                            @if(count($errors)>0)
                            <ul class="navbar-nav mr-auto">
                                  @foreach ($errors->all() as $er) 
                                 <li class="nav-item active">
                                       {{$er}}
                                      </li>       
                                 @endforeach
                                  </ul> <br>
                             @endif  
                            <form action="/salle/store" method="POST">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                      <label for="nom_etudient">Nom : </label>
                                      <input type="text" class="form-control" name="nom_etudient" id="nom_etudient" placeholder="Enter votre Nom">  
                                    </div>
                                    <div class="form-group">
                                      <label for="prenom_etudient">Prenom : </label>
                                      <input type="text" class="form-control" name="prenom_etudient" id="prenom_etudient" placeholder="Enter votre Prenom">  
                                    </div> 
                                    <div class="form-group">
                                        <label for="sexe">Sexe : </label>
                                        <input type="text" class="form-control" name="sexe" id="sexe" placeholder="Enter votre sexe">  
                                      </div> 
                                    <div class="form-group">
                                            <label for="code_massar">Code Massar : </label>
                                            <input type="text" class="form-control" name="code_massar" id="code_massar" placeholder="Enter votre Code Massar">  
                                          </div>
                                    <div class="form-group">
                                            <label for="ville_origine">Ville Origine : </label>
                                            <input type="text" class="form-control" name="ville_origine" id="ville_origine" placeholder="Enter votre Ville Origine">     
                                   </div>      
                                    <div class="form-group">
                                            <label for="date_naissance">Date Naissance : </label>
                                            <input type="text" class="form-control" name="date_naissance" id="date_naissance" placeholder="Enter votre Date Naissance"></div> 
                                         <div class="form-group">
                                           <label for="telephone">Telephone : </label>
                                           <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter votre Telephone">  
                                           </div>   
                                    <div class="form-group">
                                            <label for="ville_residence	">Ville Residence : </label>
                                            <input type="text" class="form-control" name="ville_residence" id="ville_residence" placeholder="Enter votre Ville Residence"></div>            
                                    <div class="form-group">
                                            <label for="adresse_etudient">Adresse : </label>
                                            <input type="text" class="form-control" name="adresse_etudient" id="adresse_etudient" placeholder="Enter votre Adresse"></div> 
                                           <div class="form-group">
                                                <label for="nomsalle">Email : </label>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter votre Email">     
                                           </div> 
                                          <div class="form-group">
                                            <label for="password"> Password : </label>
                                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter votre Password">     
                                           </div>  
                                           <div class="form-group">
                                                <label for="photo_etudient">Entrez Votre Photo</label>
                                                <input type="file" class="form-control-file" name="photo_etudient" id="photo_etudient">
                                              </div> 
                                           <div>
                                           <button type="submit" class="btn btn-primary">Ajouter </button> 
                                        </div> 
                                  </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

 
    
@endsection