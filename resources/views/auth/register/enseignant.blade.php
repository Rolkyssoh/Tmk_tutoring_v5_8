@extends('layouts.default')

@section('content')
<div class="container" style="margin-top:20px; margin-bottom:20px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                    <div class="card-header">  
                            <h1 class="mytitle">Create Enseignant</h1>  
                   </div>  <br>
                    <div class="card-body">   

                      <form action='{{ url("register/enseignant") }}' method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nom_enseignant">{{ __('Nom enseignant') }}</label>
                          {{--  <div class="col-md-6">  --}}
                              <input id="nom_enseignant" type="text" class="form-control @error('nom_enseignant') is-invalid @enderror" name="nom_enseignant" value="{{ old('nom_enseignant') }}" autocomplete="nom_enseignant" placeholder="Enter votre Nom" autofocus>
                              @error('nom_enseignant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                          <label for="prenom_enseignant">{{ __('Prenom enseignant') }}</label>
                              <input id="prenom_enseignant" type="text" class="form-control @error('prenom_enseignant') is-invalid @enderror" name="prenom_enseignant" value="{{ old('prenom_enseignant') }}" autocomplete="prenom_enseignant" placeholder="Enter votre Prenom" autofocus>
                              @error('prenom_enseignant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="adresse_enseignant">{{ __('Adresse enseignant') }}</label>
                              <input id="adresse_enseignant" type="text" class="form-control @error('adresse_enseignant') is-invalid @enderror" name="adresse_enseignant" value="{{ old('adresse_enseignant') }}" autocomplete="adresse_enseignant" placeholder="Enter votre Adresse" autofocus>
                              @error('adresse_enseignant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span> 
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="tel_enseignant">{{ __('Telephone enseignant') }}</label>
                              <input id="tel_enseignant" type="text" class="form-control @error('tel_enseignant') is-invalid @enderror" name="tel_enseignant" value="{{ old('tel_enseignant') }}" autocomplete="tel_enseignant" placeholder="Enter votre Telephone" autofocus>
                              @error('tel_enseignant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="email_enseignant">{{ __('Email enseignant') }}</label>
                              <input id="email_enseignant" type="email" class="form-control @error('email_enseignant') is-invalid @enderror" name="email_enseignant" value="{{ old('email_enseignant') }}" autocomplete="email_enseignant" placeholder="Enter votre Telephone" autofocus>
                              @error('email_enseignant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="password">{{ __('Password') }}</label>
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
                          <label for="photo_enseignant">{{ __('Entrez Votre Photo') }}</label>
                              <input id="photo_enseignant" type="file" class="form-control @error('photo_enseignant') is-invalid @enderror" name="photo_enseignant" value="{{ old('photo_enseignant') }}" autocomplete="photo_enseignant" placeholder="Enter votre photo" autofocus>
                              @error('photo_enseignant')
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
