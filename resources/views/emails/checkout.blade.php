<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achat de ticket</title>
</head>
<body>
    <div>
        Vous venez d'achetez {{ $data['metadata']['quantity_ticket'] }} ticket
    </div>
    <ul>
        <li>
            Les tickets sont au nom de {{ $data['metadata']['customer_name'] }} {{ $data['metadata']['customer_firstname'] }}
        </li>
        <li>
            email : {{ $data['customer_email'] }}
        </li>
        <li>
            Montant total : {{ $data['metadata']['quantity_ticket'] * 5 }}€
        </li>
    </ul>
</body>
</html>
