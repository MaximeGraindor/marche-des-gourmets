<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Whitecube\NovaPage\Pages\Manager;
use App\Mail\CheckoutApplyNotification;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Manager $page)
    {
        $page->loadForRoute($request->route());
    }

    public function checkout(Request $request)
    {

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $intent = \Stripe\PaymentIntent::create([
            'amount' => ($request->amount) * 100,
            'currency' => 'eur',
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        Mail::to('maxime.graindor@hotmail.com')->send(new CheckoutApplyNotification($request));

        return view('pages.ticketing', compact('clientSecret', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
