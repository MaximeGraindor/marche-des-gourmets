<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        Vous avez reçu un email de {{ $data['email'] }}
    </div>
    <ul>
        <li>
            nom : {{ $data['name'] }}
        </li>
        <li>
            email : {{ $data['email'] }}
        </li>
        <li>
            sujet : {{ $data['subject'] }}
        </li>
        <li>
            message : {{ $data['message'] }}
        </li>
    </ul>
</body>
</html>
