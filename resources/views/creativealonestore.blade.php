<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Créateur Personnelle</title>
</head>
<body>
<form action="{{ route('inscription.store') }}" method="POST">
    @csrf
    
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
        @error('nom')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
        @error('prenom')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="num">Numéro de téléphone :</label>
        <input type="number" id="num" name="num" value="{{ old('num') }}" required>
        @error('num')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}" required>
        @error('date_naissance')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="niveau">Niveau :</label>
        <select id="niveau" name="niveau" required>
            <option value="">Sélectionnez un niveau</option>
            <option value="débutant" {{ old('niveau') === 'débutant' ? 'selected' : '' }}>Débutant</option>
            <option value="intermédiaire" {{ old('niveau') === 'intermédiaire' ? 'selected' : '' }}>Intermédiaire</option>
            <option value="expert" {{ old('niveau') === 'expert' ? 'selected' : '' }}>Expert</option>
        </select>
        @error('niveau')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <button type="submit">Valider</button>
</form>

</body>
</html>