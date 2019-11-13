@extends('layouts.default')

@section('content')
<div class="container" style="margin-top:20px; margin-bottom:20px">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card"> 
                   <div class="card-header">  
                           <h1 class="mytitle">Create Inspecteur Regionale</h1>  
                  </div>  <br>
                   <div class="card-body">  
                      <form action='{{ url("register/inspecteur") }}' method="POST">
                        @csrf

                        <div class="form-group">
                          <label for="nom_inspect">{{ __('Nom enseignant') }}</label>
                          {{--  <div class="col-md-6">  --}}
                              <input id="nom_inspect" type="text" class="form-control @error('nom_inspect') is-invalid @enderror" name="nom_inspect" value="{{ old('nom_inspect') }}" autocomplete="nom_inspect" placeholder="Enter votre Nom" autofocus>
                              @error('nom_inspect')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          {{--  </div>  --}}
                        </div>

                        <div class="form-group">
                          <label for="prenom_inspect">{{ __('Prenom enseignant') }}</label>
                              <input id="prenom_inspect" type="text" class="form-control @error('prenom_inspect') is-invalid @enderror" name="prenom_inspect" value="{{ old('prenom_inspect') }}" autocomplete="prenom_inspect" placeholder="Enter votre Prenom" autofocus>
                              @error('prenom_inspect')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="telephone">{{ __('Telephone enseignant') }}</label>
                              <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" placeholder="Enter votre Telephone" autofocus>
                              @error('telephone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="adresse_inspect">{{ __('Adresse enseignant') }}</label>
                              <input id="adresse_inspect" type="text" class="form-control @error('adresse_inspect') is-invalid @enderror" name="adresse_inspect" value="{{ old('adresse_inspect') }}" autocomplete="adresse_inspect" placeholder="Enter votre Adresse" autofocus>
                              @error('adresse_inspect')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="email_inspect">{{ __('Email enseignant') }}</label>
                              <input id="email_inspect" type="text" class="form-control @error('email_inspect') is-invalid @enderror" name="email_inspect" value="{{ old('email_inspect') }}" autocomplete="email_inspect" placeholder="Enter votre Email" autofocus>
                              @error('email_inspect')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                          <label for="password">{{ __('Password enseignant') }}</label>
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
                          <label for="photo_inspect">{{ __('Entrez Votre Photo') }}</label>
                              <input id="photo_inspect" type="file" class="form-control @error('photo_inspect') is-invalid @enderror" name="photo_inspect" value="{{ old('photo_inspect') }}" autocomplete="photo_inspect" placeholder="Enter votre photo" autofocus>
                              @error('photo_inspect')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
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
