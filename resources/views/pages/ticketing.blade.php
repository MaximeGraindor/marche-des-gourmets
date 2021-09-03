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

        <form id="payment-form" action="/checkout" method="post">
            @csrf
            <div class="checkout-firstname">
                <label for="firstname">Prénom sur la carte</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="checkout-name">
                <label for="name">Nom sur la carte</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="checkout-email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="checkout-ticket">
                <label for="ticket">Nombre de ticket</label>
                <select type="text" name="ticket" id="ticket">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div id="card-element">
              <!-- Elements will create input elements here -->
            </div>

            <div class="checkout-amount">
                <p>
                    Total:&nbsp;<span id="amount">5</span>€
                </p>
                <input type="hidden" name="amount" value="0" id="amountInputHidden">
            </div>

            <button id="submit">Pay</button>
            <p class="hidden result-message">
                Payment succeeded, see the result in your
                <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
            </p>
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
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: card,
                billing_details: {
                    name: '{{ $request->firstname . ' ' . $request->name }}'
                }
            }
        }).then(function(result) {
                if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                console.log(result.error.message);
                } else {
                // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        console.log('Paiement réussi!');
                        document.querySelector('.result-message').classlist.remove('hidden')
                        document.querySelector('.button').disabled = true
                    }
                }
            });
        });

        form.addEventListener('submit', function(ev) {
            console.log('test');
        })
    </script>
@endsection
