<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.9/tailwind.min.css" integrity="sha512-SvJR34InARUfJb279ipE/gjQqX11MDKaly9MNb0vevuWQJmZ23UH7F/65ScEsvLI+myKGbdfA1En82wVSCHQ8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    @for($i=1; $i <= $session['metadata']['quantity_ticket']; $i++)
        <div class="text-center" style="background-color: #3a1717; color: white; border: 2px solid black; order-radius: 5px">
            <p class="p-5" style="border-bottom: 2px solid white; font-size: 1.5rem">
                Marché des Gourmets - Ticket
            </p>
            <p style="margin-bottom: 1.5rem; margin-top: 3rem; font-size: 1.5rem"">
                {{$session['metadata']['customer_name']}} {{$session['metadata']['customer_firstname']}}
            </p>
            <div style="display: flex; flex-direction: column;">
                <p><img src="{{ public_path('img\qr-code.png') }}" style=" width: 40%; height: auto;"></p>
            </div>
        </div>
        <div class="page-break"></div>
    @endfor

</body>
</html>
