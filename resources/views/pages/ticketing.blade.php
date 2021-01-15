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

        {{-- <form action="#" method="post" class="checkout-wrap" id="checkout-form">

            <div class="form-email">
                <label for="email">Email</label>
                <input type="mail" name="email" id="email" placeholder="jean.dumont@gmail.com">
            </div>

            <div class="form-name">
                <label for="name">Nom de la carte</label>
                <input type="text" name="name" id="name" placeholder="Maxime Dumont">
            </div>

            <div class="form-cardCode">
                <label for="cardCode">carte bancaire</label>
                <input type="text" name="cardCode" id="cardCode" placeholder="4242 4242 4242 4242">
            </div>
            <div class="form-cardExpi">
                <label for="cardExpi">Date d'expiration</label>
                <div>
                    <input type="text" name="cardExpiMonth" id="cardExpi" placeholder="MM">
                    <input type="text" name="cardExpiYear" id="cardExpi" placeholder="YY">
                </div>
            </div>
            <div class="form-cardCVV">
                <label for="cardCVV">CVV</label>
                <input type="text" name="cardCVV" id="cardCVV" placeholder="333">
            </div>
            <div class="form-ticket">
                <label for="ticket">Ticket</label>
                <select name="ticket" id="ticket">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-amount">
                <p>
                	Total:&nbsp;<span class="amount">5</span>€
                </p>
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" id="submit" placeholder="333">
            </div>
        </form> --}}

        <form id="payment-form" action="#">
            <div id="card-element">
              <!-- Elements will create input elements here -->
            </div>

            <!-- We'll put the error messages in this element -->
            <div id="card-errors" role="alert"></div>

            <button id="submit">Pay</button>
        </form>

        <p class="hidden result-message">
            Payment succeeded, see the result in your
            <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
        </p>

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
                        console.log('Paiement réussi!');
                        document.querySelector('.result-message').classlist.remove('hidden')
                        document.querySelector('.button').disabled = true
                    }
                }
            });
        });
    </script>
@endsection
