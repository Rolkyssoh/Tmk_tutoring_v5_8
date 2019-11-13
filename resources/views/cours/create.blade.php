@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Nouveau cours') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cours.store') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="libelle_cours" class="col-md-4 col-form-label text-md-right">{{ __('Titre du cours') }}</label>
                            <div class="col-md-6">
                                <input id="libelle_cours" type="text" class="form-control @error('libelle_cours') is-invalid @enderror" name="libelle_cours" value="{{ old('libelle_cours') }}"  autocomplete="libelle_cours" autofocus>

                                @error('libelle_cours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Créer') }}
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
