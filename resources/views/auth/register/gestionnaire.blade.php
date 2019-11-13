@extends('layouts.default')

@section('content')
<div class="container" style="margin-top:20px; margin-bottom:20px">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card"> 
                   <div class="card-header">  
                           <h1 class="mytitle">Create Gestionnaire des salles</h1>  
                  </div>  <br>
                   <div class="card-body">  

                    <form action='{{ url("register/gestionnaire") }}' method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nom_gestionnaire">{{ __('Nom Directeur') }}</label>
                          {{--  <div class="col-md-6">  --}}
                              <input id="nom_gestionnaire" type="text" class="form-control @error('nom_gestionnaire') is-invalid @enderror" name="nom_gestionnaire" value="{{ old('nom_gestionnaire') }}" autocomplete="nom_gestionnaire" placeholder="Enter votre Nom" autofocus>
                              @error('nom_gestionnaire')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                          <label for="prenom_gestionsalle">{{ __('Prenom Directeur') }}</label>
                              <input id="prenom_gestionsalle" type="text" class="form-control @error('prenom_gestionsalle') is-invalid @enderror" name="prenom_gestionsalle" value="{{ old('prenom_gestionsalle') }}" autocomplete="prenom_gestionsalle" placeholder="Enter votre Prenom" autofocus>
                              @error('prenom_gestionsalle')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="adresse_gestionsalle">{{ __('Adresse Directeur') }}</label>
                              <input id="adresse_gestionsalle" type="text" class="form-control @error('adresse_gestionsalle') is-invalid @enderror" name="adresse_gestionsalle" value="{{ old('adresse_gestionsalle') }}" autocomplete="adresse_gestionsalle" placeholder="Enter votre Adresse" autofocus>
                              @error('adresse_gestionsalle')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="email_gestionnaire">{{ __('Email Directeur') }}</label>
                              <input id="email_gestionnaire" type="email" class="form-control @error('email_gestionnaire') is-invalid @enderror" name="email_gestionnaire" value="{{ old('email_gestionnaire') }}" autocomplete="email_gestionnaire" placeholder="Enter votre Email" autofocus>
                              @error('email_gestionnaire')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="password">{{ __('Password Directeur') }}</label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="password" placeholder="Enter votre Password" autofocus>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="password-confirm">{{ __('Confirm Password') }}</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div> 

                        <div class="form-group">
                          <label for="photo_gestionsalle">{{ __('Entrez Votre Photo') }}</label>
                              <input id="photo_gestionsalle" type="file" class="form-control @error('photo_gestionsalle') is-invalid @enderror" name="photo_gestionsalle" value="{{ old('photo_gestionsalle') }}" autocomplete="photo_gestionsalle" placeholder="Entrez Votre Photo" autofocus>
                              @error('photo_gestionsalle')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
 
                         <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Register') }}
                              </button>
                          </div>
                        </div>
                        
                      </form>
                   </div>
               </div>
           </div>
       </div>
</div>
@endsection
