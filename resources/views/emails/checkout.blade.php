<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Notification</title>
</head>
<body>
    <div>
        Vous venez d'achetez {{ $data['ticket'] }} ticket
    </div>
    <ul>
        <li>
            Les tickets sont au nom de {{ $data['name'] }}
        </li>
        <li>
            email : {{ $data['email'] }}
        </li>
        <li>
            Montant total : {{ $data['amount'] }}
        </li>
    </ul>
</body>
</html>
