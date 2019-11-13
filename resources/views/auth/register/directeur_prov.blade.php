
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
                            <h1 class="mytitle"> Create Directeur Regionale</h1>  
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
                                      <label for="nom_directeurprovinciale">Nom  : </label>
                                      <input type="text" class="form-control" name="nom_directeurprovinciale" id="nom_directeurprovinciale"	  placeholder="Enter votre Nom">  
                                    </div>
                                    <div class="form-group">
                                      <label for="prenom_directeurprovinciale">Prenom  : </label>
                                      <input type="text" class="form-control" name="prenom_directeurprovinciale" id="prenom_directeurprovinciale" placeholder="Enter votre Prenom">  
                                    </div> 
                                    <div class="form-group">
                                        <label for="email">Email  : </label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter votre Prenom">  
                                      </div> 
                                      <div class="form-group">
                                        <label for="adresse_directeurprovinciale">Adresse : </label>
                                        <input type="text" class="form-control" name="adresse_directeurprovinciale" id="adresse_directeurprovinciale" placeholder="Enter votre adresse">  
                                        </div>  
                                    <div class="form-group">
                                           <label for="telephone">Telephone : </label>
                                           <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter votre Telephone">  
                                           </div> 
                                           <div class="form-group">
                                                <label for="email">Email : </label>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter votre Email">     
                                           </div>   
                                          <div class="form-group">
                                            <label for="password"> Password : </label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter votre Password">     
                                           </div>  
                                           <div class="form-group">
                                                <label for="photo_directeurprovinciale">Entrez Votre Photo : </label>
                                                <input type="file" class="form-control-file" name="photo_directeurprovinciale"  id="photo_directeurprovinciale">
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