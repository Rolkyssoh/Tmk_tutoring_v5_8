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
                           <h1 class="mytitle">Create Inspecteur Regionale</h1>  
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
                                     <label for="nom_inspecteur">Nom  : </label>
                                     <input type="text" class="form-control" name="nom_inspecteur" id="nom_inspecteur" placeholder="Enter votre Nom">  
                                   </div>
                                   <div class="form-group">
                                     <label for="prenom_inspecteur">Prenom  : </label>
                                     <input type="text" class="form-control" name="prenom_inspecteur" id="prenom_inspecteur" placeholder="Enter votre Prenom">  
                                   </div> 
                                   <div class="form-group">
                                          <label for="telephone">Telephone : </label>
                                          <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter votre Telephone">  
                                          </div>           
                                   <div class="form-group">
                                           <label for="adresse_inspecteur">Adresse : </label>
                                           <input type="text" class="form-control" name="adresse_inspecteur" id="adresse_inspecteur" placeholder="Enter votre Adresse"></div>
                                           <div class="form-group"> 
                                          <div class="form-group">
                                               <label for="email_inspecteur">Email : </label>
                                               <input type="text" class="form-control" name="email_inspecteur" id="email_inspecteur" placeholder="Enter votre Email">     
                                          </div> 
                                         <div class="form-group">
                                           <label for="nomsalle"> Password : </label>
                                           <input type="password" class="form-control" name="password" id="password" placeholder="Enter votre Password">     
                                          </div> 
                                          <div>
                                          <button type="submit" class="btn btn-primary">Submit </button> 
                                       </div> 
                                 </form>
                   </div>
               </div>
           </div>
       </div>
   </div> 
   

@endsection