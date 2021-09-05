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
                <label for="firstname">Nom</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="checkout-name">
                <label for="name">Prénom</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="checkout-email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="checkout-quantity">
                <label for="quantity">Nombre de ticket</label>
                <select type="text" name="quantity" id="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="checkout-amount">
                <p>
                    Total:&nbsp;<span id="amount">5</span>€
                </p>
                <input type="hidden" name="amount" value="0" id="amountInputHidden">
            </div>
            <button id="submit">Payer</button>
        </form>
    </main>

    <x-footer/>
@endsection
