@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="user_type" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>
                            <div class="col-md-6">
                                @php
                                    $defaultUserType = 'creative_alone';
                                @endphp
                                <select id="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" required>
                                    <option value="creative_alone" {{ old('$defaultUserType') === 'creative_alone' ? 'selected' : '' }}>Creative Alone</option>
                                    <option value="entreprise" {{ old('$defaultUserType') === 'entreprise' ? 'selected' : '' }}>Entreprise</option>
                                    <option value="agence" {{ old('$defaultUserType') === 'agence' ? 'selected' : '' }}>Agence</option>
                                </select>
                                @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 user-field user_agence">
                            <label for="name_agent" class="col-md-4 col-form-label text-md-end">{{ __('Agent Name') }}</label>
                            <div class="col-md-6">
                                <input id="name_agent" type="text" class="form-control @error('name_agent') is-invalid @enderror" name="name_agent" value="{{ old('name_agent') }}" required autocomplete="name_agent">
                                 @error('name_agent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 user-field user_creative user_agence">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>
                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">
                                    @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 user-field user_entreprise user_agence">
                            <label for="siret" class="col-md-4 col-form-label text-md-end">{{ __('Siret') }}</label>
                            <div class="col-md-6">
                                <input id="siret" type="text" class="form-control @error('siret') is-invalid @enderror" name="siret" value="{{ old('siret') }}" required autocomplete="siret">
                                @error('siret')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lien" class="col-md-4 col-form-label text-md-end">{{ __('Lien') }}</label>
                            <div class="col-md-6">
                                <input id="lien" type="text" class="form-control @error('lien') is-invalid @enderror" name="lien" value="{{ old('lien') }}" autocomplete="lien">
                                @error('lien')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Champ pour la date de création -->
                        <div class="row mb-3 user-field user_entreprise">
                            <label for="date_creation" class="col-md-4 col-form-label text-md-end">{{ __('Date de création') }}</label>

                            <div class="col-md-6">
                                <input id="date_creation" type="date" class="form-control @error('date_creation') is-invalid @enderror" name="date_creation" value="{{ old('date_creation') }}" autocomplete="date_creation">

                            @error('date_creation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <!-- Champ pour la date de naissance -->
                        <div class="row mb-3 user-field user_creative">
                            <label for="date_naissance" class="col-md-4 col-form-label text-md-end">{{ __('Date de naissance') }}</label>

                            <div class="col-md-6">
                                <input id="date_naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naissance') }}" autocomplete="date_naissance">

                            @error('date_naissance')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
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
<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Script pour gérer l'affichage des champs en fonction du type d'utilisateur -->
<script>
    $(document).ready(function() {
    // Écouter les changements de sélection de l'utilisateur
    $('#user_type').on('change', function() {
        var userType = $(this).val();

        // Masquer tous les champs du formulaire
        $('.user-field').hide();

        // Afficher les champs spécifiques au type d'utilisateur sélectionné
        if (userType === 'creative_alone') {
        $('.user_creative').show();
        } else if (userType === 'entreprise') {
        $('.user_entreprise').show();
        } else if (userType === 'agence') {
        $('.user_agence').show();
        }
         });
    });
</script>
