<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Nouvelle candidature d'exposant!
    </h1>
    <ul>
        <li>Prénom : {{ $data['firstname'] }}</li>
        <li>Nom : {{ $data['name'] }}</li>
        <li>Email : {{ $data['email'] }}</li>
        <li>Téléphone : {{ $data['telephone'] }}</li>
        <li>Adresse : {{ $data['country'] }}</li> - {{ $data['location'] }}, {{ $data['postal_code'] }}
        <li>informations supplémentaires : {{ $data['informations'] }}</li>
    </ul>

    <ul>
        @foreach ($data['keywords'] as $keyword)
            <li>
                {{ $keyword }}
            </li>
        @endforeach
    </ul>
</body>
</html>
