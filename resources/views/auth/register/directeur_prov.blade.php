@extends('layouts.default')

@section('content')
<div class="container" style="margin-top:20px; margin-bottom:20px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                    <div class="card-header">   
                            <h1 class="mytitle"> Create Directeur Regionale</h1>  
                   </div>  <br>
                    <div class="card-body">  
      
                      <form action='{{ url("register/directeur_prov") }}' method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nom_dr_prov">{{ __('Nom Directeur') }}</label>
                          {{--  <div class="col-md-6">  --}}
                              <input id="nom_dr_prov" type="text" class="form-control @error('nom_dr_prov') is-invalid @enderror" name="nom_dr_prov" value="{{ old('nom_dr_prov') }}" autocomplete="nom_dr_prov" placeholder="Enter votre Nom" autofocus>
                              @error('nom_dr_prov')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                          <label for="prenom_dr_prov">{{ __('Prenom Directeur') }}</label>
                              <input id="prenom_dr_prov" type="text" class="form-control @error('prenom_dr_prov') is-invalid @enderror" name="prenom_dr_prov" value="{{ old('prenom_dr_prov') }}" autocomplete="prenom_dr_prov" placeholder="Enter votre Prenom" autofocus>
                              @error('prenom_dr_prov')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="email_dr_prov">{{ __('Email Directeur') }}</label>
                              <input id="email_dr_prov" type="email" class="form-control @error('email_dr_prov') is-invalid @enderror" name="email_dr_prov" value="{{ old('email_dr_prov') }}" autocomplete="email_dr_prov" placeholder="Enter votre Email" autofocus>
                              @error('email_dr_prov')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="adresse_dr_prov">{{ __('Adresse Directeur') }}</label>
                              <input id="adresse_dr_prov" type="text" class="form-control @error('adresse_dr_prov') is-invalid @enderror" name="adresse_dr_prov" value="{{ old('adresse_dr_prov') }}" autocomplete="adresse_dr_prov" placeholder="Enter votre Adresse" autofocus>
                              @error('adresse_dr_prov')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="telephone">{{ __('Telephone Directeur') }}</label>
                              <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" placeholder="Enter votre Telephone" autofocus>
                              @error('telephone')
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
                          <label for="photo_dr_prov">{{ __('Entrez Votre Photo ') }}</label>
                              <input id="photo_dr_prov" type="file" class="form-control @error('photo_dr_prov') is-invalid @enderror" name="photo_dr_prov" value="{{ old('photo_dr_prov') }}" autocomplete="photo_dr_prov" placeholder="Entrez Votre Photo " autofocus>
                              @error('photo_dr_prov')
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
