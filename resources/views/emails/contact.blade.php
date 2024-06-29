<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@isset($data['link']) {{ $data['link'] }} @endisset</title>
</head>
<body>
    <div class="flex justify-between"><img src="{{ asset('/img/logo.png') }}" alt="Logo - Collablorabiz" style="width: 128px;height:fit-content"><div></div></div>
    <h1>Nouveau message de contact</h1>
    <p><strong>Nom:</strong> {{ $data['nom'] }}</p>
    <p><strong>Téléphone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['mail'] }}</p>
    <p><strong>Entreprise:</strong> {{ $data['work'] }}</p>
    <p><strong>Question:</strong> {{ $data['question'] }}</p>
</body>
</html>

