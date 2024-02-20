<x-guest-layout>
    @section('content')
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
        
            <!-- Champs pour le choix du type d'utilisateur -->
            <div class="mt-4">
                <x-label for="user_type" value="{{ __('User Type') }}" />
                <select id="user_type" name="user_type" class="block mt-1 w-full" required>
                    <option value="entreprise">Entreprise</option>
                    <option value="agence">Agence</option>
                    <option value="createur">Createur</option>
                </select>
            </div>
        
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
        
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
        
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
        
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        
            <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div>
            
            <!-- Champs spécifiques en fonction du type d'utilisateur -->
            @if(old('user_type') === 'entreprise' || old('user_type') === 'agence')
                <div>
                    <x-label for="siret" value="{{ __('SIRET') }}" />
                    <x-input id="siret" class="block mt-1 w-full" type="text" name="siret" :value="old('siret')" required />
                </div>
            
                <div>
                    <x-label for="date_creation" value="{{ __('Date Creation') }}" />
                    <x-input id="date_creation" class="block mt-1 w-full" type="date" name="date_creation" :value="old('date_creation')" required />
                </div>
            @endif
            
            @if(old('user_type') === 'createur')
                <div>
                    <x-label for="birthdate" value="{{ __('Birthdate') }}" />
                    <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
                </div>
            
                <div>
                    <x-label for="firstname" value="{{ __('Firstname') }}" />
                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required />
                </div>
            @endif
        
            
        
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
        
                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
        
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
        
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        <script>
            // Fonction pour afficher ou masquer les champs en fonction du type d'utilisateur
            function updateFieldsVisibility() {
                // Récupérer la valeur sélectionnée dans le menu déroulant
                var userType = document.getElementById('user_type').value;
                
                // Récupérer les éléments des champs spécifiques
                var siretField = document.getElementById('siret');
                var dateCreationField = document.getElementById('date_creation');
                var birthdateField = document.getElementById('birthdate');
                var firstnameField = document.getElementById('firstname');
        
                // Masquer tous les champs spécifiques
                siretField.style.display = 'none';
                dateCreationField.style.display = 'none';
                birthdateField.style.display = 'none';
                firstnameField.style.display = 'none';
        
                // Afficher les champs spécifiques en fonction du type d'utilisateur
                if (userType === 'entreprise' || userType === 'agence') {
                    siretField.style.display = 'block';
                    dateCreationField.style.display = 'block';
                } else if (userType === 'createur') {
                    birthdateField.style.display = 'block';
                    firstnameField.style.display = 'block';
                }
                console.log(userType);
            }
            
            // Appeler la fonction au chargement de la page et lorsqu'il y a un changement dans le menu déroulant
            document.addEventListener('DOMContentLoaded', updateFieldsVisibility);
            document.getElementById('user_type').addEventListener('change', updateFieldsVisibility);
        </script>
        
        
    </x-authentication-card>
    @endsection
</x-guest-layout>
