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
                            <h1 class="mytitle">Contactez nous</h1>  
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
                                      <label for="email">Nom Complet  : </label>
                                      <input type="email" class="form-control" name="email" placeholder="Enter votre Nom">  
                                    </div> 
                                    <div class="form-group">
                                           <label for="nomsalle">Telephone : </label>
                                           <input type="text" class="form-control" name="nomsalle" placeholder="Enter votre Telephone">  
                                           </div>  
                                           <div class="form-group">
                                                <label for="nomsalle">Email : </label>
                                                <input type="text" class="form-control" name="nomsalle" placeholder="Enter votre Email">     
                                           </div>
                                           <button type="submit" class="btn btn-primary">Submit </button> 
                                        </div> 
                                  </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    
    
@endsection