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
                            <h1 class="mytitle">Create Enseignant</h1>  
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
                                      <label for="nom_enseignant">Nom : </label>
                                      <input type="text" class="form-control" name="nom_enseignant" id="nom_enseignant" placeholder="Enter votre Nom">  
                                    </div>
                                    <div class="form-group">
                                      <label for="prenom_enseignant">Prenom : </label>
                                      <input type="text" class="form-control" name="prenom_enseignant" id="prenom_enseignant" placeholder="Enter votre Prenom">  
                                    </div> 
                                    <div class="form-group">
                                        <label for="adresse_enseignant">Adresse : </label>
                                        <input type="text" class="form-control" name="adresse_enseignant" id="adresse_enseignant" placeholder="Enter votre Adresse"></div>
                                    <div class="form-group">
                                           <label for="telephone">Telephone : </label>
                                           <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter votre Telephone">  
                                           </div> 

                                           <div class="form-group">
                                                <label for="email_enseignant">Email : </label>
                                                <input type="email" class="form-control" name="email_enseignant" id="email_enseignant" placeholder="Enter votre Email">     
                                           </div> 
                                          <div class="form-group">
                                            <label for="nomsalle"> Password : </label>
                                            <input type="password" class="form-control" name="nomsalle" placeholder="Enter votre Password">     
                                           </div>  
                                           <div class="form-group">
                                                <label for="photo_enseignant">Entrez Votre Photo</label>
                                                <input type="file" class="form-control-file" id="photo_enseignant" name="photo_enseignant">
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