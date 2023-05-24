<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('user'))
    <h2>Informations sur l'utilisateur :</h2>
    <p>Nom : {{ session('user')->nom }}</p>
    <p>Prénom : {{ session('user')->prenom }}</p>
    <p>Numéro : {{ session('user')->num }}</p>
    <p>Email : {{ session('user')->email }}</p>
    <p>Date de naissance : {{ session('user')->date_naissance }}</p>
    <p>Niveau : {{ session('user')->niveau }}</p>
@endif

@if (Auth::check())
<button><a href="{{ route('creative.alone.edit') }}">Modifier mes informations</a></button>
@endif
</body>
</html>