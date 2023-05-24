<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Mes Informations Personnelle</title>
</head>
<body>
@if (isset($user))
<form action="{{ route('creative.alone.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nom" value="{{ $user->nom }}" required>
    <input type="text" name="prenom" value="{{ $user->prenom }}" required>
    <input type="number" id="num" name="num" value="{{ $user->num }}" required>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
    <input type="password" id="password" name="password" required>
    <input type="date" id="date_naissance" name="date_naissance" value="{{ $user->date_naissance }}" required>

    <button type="submit">Modifier</button>
</form>
@endif
</body>
</html>