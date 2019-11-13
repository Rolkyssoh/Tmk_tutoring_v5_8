@extends('layouts.default')

@section('content')
<div class="container" style="margin-top:20px; margin-bottom:20px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                    <div class="card-header"> 
                            <h1 class="mytitle">Create Etudient</h1>  
                   </div>  <br>
                    <div class="card-body">  
                        
                        <form action='{{ url("register/etudiant") }}' method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="nom_etudiant">{{ __('Nom etudiant') }}</label>
                              {{--  <div class="col-md-6">  --}}
                                  <input id="nom_etudiant" type="text" class="form-control @error('nom_etudiant') is-invalid @enderror" name="nom_etudiant" value="{{ old('nom_etudiant') }}" autocomplete="nom_etudiant" placeholder="Enter votre Nom" autofocus>
                                  @error('nom_etudiant')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              {{--  </div>  --}}
                            </div>

                            <div class="form-group">
                              <label for="prenom_etudiant">{{ __('Prenom etudiant') }}</label>
                                  <input id="prenom_etudiant" type="text" class="form-control @error('prenom_etudiant') is-invalid @enderror" name="prenom_etudiant" value="{{ old('prenom_etudiant') }}" autocomplete="prenom_etudiant" placeholder="Enter votre Prenom" autofocus>
                                  @error('prenom_etudiant')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="sexe">{{ __('Sexe') }}</label>
                                  <input id="sexe" type="text" class="form-control @error('sexe') is-invalid @enderror" name="sexe" value="{{ old('sexe') }}" autocomplete="sexe" placeholder="Enter votre sexe" autofocus>
                                  @error('sexe')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="code_massar">{{ __('Code Massar') }}</label>
                                  <input id="code_massar" type="text" class="form-control @error('code_massar') is-invalid @enderror" name="code_massar" value="{{ old('code_massar') }}" autocomplete="code_massar" placeholder="Enter votre code_massar" autofocus>
                                  @error('code_massar')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="ville_origine">{{ __('Code Massar') }}</label>
                                  <input id="ville_origine" type="text" class="form-control @error('ville_origine') is-invalid @enderror" name="ville_origine" value="{{ old('ville_origine') }}" autocomplete="ville_origine" placeholder="Enter votre ville_origine" autofocus>
                                  @error('ville_origine')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="date_naissance">{{ __('Date Naissance') }}</label>
                                  <input id="date_naissance" type="text" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naissance') }}" autocomplete="date_naissance" placeholder="Enter votre Naissance" autofocus>
                                  @error('date_naissance')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="telephone">{{ __('Date Naissance') }}</label>
                                  <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" placeholder="Enter votre Telephone" autofocus>
                                  @error('telephone')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="ville_residence">{{ __('Date Naissance') }}</label>
                                  <input id="ville_residence" type="text" class="form-control @error('ville_residence') is-invalid @enderror" name="ville_residence" value="{{ old('ville_residence') }}" autocomplete="ville_residence" placeholder="Enter votre Ville Residence" autofocus>
                                  @error('ville_residence')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group"> 
                              <label for="adresse_etudiant">{{ __('Adresse') }}</label>
                                  <input id="adresse_etudiant" type="text" class="form-control @error('adresse_etudiant') is-invalid @enderror" name="adresse_etudiant" value="{{ old('adresse_etudiant') }}" autocomplete="adresse_etudiant" placeholder="Enter votre Adresse" autofocus>
                                  @error('adresse_etudiant')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>

                            <div class="form-group">
                              <label for="email_etudiant">{{ __('Email etudiant') }}</label>
                                  <input id="email_etudiant" type="email" class="form-control @error('email_etudiant') is-invalid @enderror" name="email_etudiant" value="{{ old('email_etudiant') }}" autocomplete="email_etudiant" placeholder="Enter votre email_etudiant" autofocus>
                                  @error('email_etudiant')
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
                              <label for="photo_etudient">{{ __('Entrez Votre Photo') }}</label>
                                  <input id="photo_etudient" type="file" class="form-control @error('photo_etudient') is-invalid @enderror" name="photo_etudient" value="{{ old('photo_etudient') }}" autocomplete="photo_etudient" placeholder="Enter votre photo_etudient" autofocus>
                                  @error('photo_etudient')
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
