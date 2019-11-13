@extends('layouts.default')

@section('content')
<div class="container" style="margin-top:20px; margin-bottom:20px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                    <div class="card-header">  
                            <h1 class="mytitle">Create Parents</h1>  
                   </div>  <br>
                    <div class="card-body">  
  
                      <form action='{{ url("register/parent_tut") }}' method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nom_parent">{{ __('Nom Directeur') }}</label>
                          {{--  <div class="col-md-6">  --}}
                              <input id="nom_parent" type="text" class="form-control @error('nom_parent') is-invalid @enderror" name="nom_parent" value="{{ old('nom_parent') }}" autocomplete="nom_parent" placeholder="Enter votre Nom" autofocus>
                              @error('nom_parent')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                          <label for="prenom_parent">{{ __('Prenom Directeur') }}</label>
                              <input id="prenom_parent" type="text" class="form-control @error('prenom_parent') is-invalid @enderror" name="prenom_parent" value="{{ old('prenom_parent') }}" autocomplete="prenom_parent" placeholder="Enter votre Prenom" autofocus>
                              @error('prenom_parent')
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
                          <label for="adresse_parent">{{ __('Adresse Directeur') }}</label>
                              <input id="adresse_parent" type="text" class="form-control @error('adresse_parent') is-invalid @enderror" name="adresse_parent" value="{{ old('adresse_parent') }}" autocomplete="adresse_parent" placeholder="Enter votre Adresse" autofocus>
                              @error('adresse_parent')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="email_parent">{{ __('Email Directeur') }}</label>
                              <input id="email_parent" type="email" class="form-control @error('email_parent') is-invalid @enderror" name="email_parent" value="{{ old('email_parent') }}" autocomplete="email_parent" placeholder="Enter votre Email" autofocus>
                              @error('email_parent')
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
                          <label for="photo_parent">{{ __('Entrez Votre Photo') }}</label>
                              <input id="photo_parent" type="file" class="form-control @error('photo_parent') is-invalid @enderror" name="photo_parent" value="{{ old('photo_parent') }}" autocomplete="photo_parent" placeholder="Entrez Votre Photo" autofocus>
                              @error('photo_parent')
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
