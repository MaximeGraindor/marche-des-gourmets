@extends('layouts.base')
@section('title', 'Billeterie')
@section('content')
    <h1 class="hidden">
        Billeterie - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="billeterie">
        <h2 class="billeterie-title" role="heading" aria-level="2">
            Achetez un billet
        </h2>

        <div class="billeterie-alert">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo inventore assumenda id accusantium delectus hic voluptates, aperiam, commodi nobis nemo possimus voluptas necessitatibus expedita. Quos quisquam voluptas rem exercitationem eveniet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio modi laboriosam perferendis dolores quaerat. Amet, ad dolores quos in ullam placeat, molestiae rerum eum modi temporibus libero earum et maiores!
            </p>
        </div>

        <form id="payment-form" action="#">
            <div id="card-element">
              <!-- Elements will create input elements here -->
            </div>

            <!-- We'll put the error messages in this element -->
            <div id="card-errors" role="alert"></div>

            <button id="submit">Pay</button>
        </form>

    </main>

    <x-footer/>

    <script>
        var stripe = Stripe("pk_test_51HrkfvKWEhKiOo9hcmSMf2zSkA1lH9TgMLUOiM5opMQ2Wx6beONWZRrqmjlSOuCnDXiraNOLCVUwKoEHJU8DXflm00V5tFe91H");
        var elements = stripe.elements();

        var style = {
        base: {
            color: "#32325d",
            padding: "20rem"
        }
        };

        var card = elements.create("card", { style: style });
        card.mount("#card-element");

        card.on('change', ({error}) => {
            let displayError = document.getElementById('card-errors');
            if (error) {
            displayError.textContent = error.message;
            } else {
            displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
            console.log('ben alors gros');
        ev.preventDefault();
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
            card: card,
            billing_details: {
                name: 'Jenny Rosen'
            }
            }
        }).then(function(result) {
            if (result.error) {
            // Show error to your customer (e.g., insufficient funds)
            console.log(result.error.message);
            } else {
            // The payment has been processed!
            if (result.paymentIntent.status === 'succeeded') {
                // Show a success message to your customer
                // There's a risk of the customer closing the window before callback
                // execution. Set up a webhook or plugin to listen for the
                // payment_intent.succeeded event that handles any business critical
                // post-payment actions.
            }
            }
        });
        });
    </script>
@endsection
