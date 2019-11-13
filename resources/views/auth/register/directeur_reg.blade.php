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
  
                      <form action='{{ url("register/directeur_reg") }}' method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nom_dreg">{{ __('Nom Directeur') }}</label>
                          {{--  <div class="col-md-6">  --}}
                              <input id="nom_dreg" type="text" class="form-control @error('nom_dreg') is-invalid @enderror" name="nom_dreg" value="{{ old('nom_dreg') }}" autocomplete="nom_dreg" placeholder="Enter votre Nom" autofocus>
                              @error('nom_dreg')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                          <label for="prenom_dreg">{{ __('Prenom Directeur') }}</label>
                              <input id="prenom_dreg" type="text" class="form-control @error('prenom_dreg') is-invalid @enderror" name="prenom_dreg" value="{{ old('prenom_dreg') }}" autocomplete="prenom_dreg" placeholder="Enter votre Prenom" autofocus>
                              @error('prenom_dreg')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="adresse_dreg">{{ __('Adresse Directeur') }}</label>
                              <input id="adresse_dreg" type="text" class="form-control @error('adresse_dreg') is-invalid @enderror" name="adresse_dreg" value="{{ old('adresse_dreg') }}" autocomplete="adresse_dreg" placeholder="Enter votre Prenom" autofocus>
                              @error('adresse_dreg')
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
                          <label for="email_dreg">{{ __('Email Directeur') }}</label>
                              <input id="email_dreg" type="email" class="form-control @error('email_dreg') is-invalid @enderror" name="email_dreg" value="{{ old('email_dreg') }}" autocomplete="email_dreg" placeholder="Enter votre Email" autofocus>
                              @error('email_dreg')
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
                          <label for="photo_dreg">{{ __('Entrez Votre Photo') }}</label>
                              <input id="photo_dreg" type="file" class="form-control @error('photo_dreg') is-invalid @enderror" name="photo_dreg" value="{{ old('photo_dreg') }}" autocomplete="photo_dreg" placeholder="Enter votre photo" autofocus>
                              @error('photo_dreg')
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
