<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Checkout;
use Barryvdh\DomPDF\Facade as PDF;
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
        $clientSecret = '';
        $page->loadForRoute($request->route());

        return view('pages.ticketing', compact('clientSecret', 'request', 'page'));
    }

    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://mdg.local/';

        $checkout_session = \Stripe\Checkout\Session::create([
            "customer_email" => $request->email,
            'line_items' => [
                [
                  'price' => 'price_1I1tyXKWEhKiOo9h8ahAyHds',
                  'quantity' => $request->quantity,
                ],
            ],
            'submit_type' => 'pay',
            'payment_method_types' => [
              'card',
              'bancontact',
              'sofort',
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . 'success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $YOUR_DOMAIN . '/cancel',
            "metadata" => [
                "customer_name" => $request->name,
                "customer_firstname" => $request->firstname,
                "quantity_ticket" => $request->quantity,
            ]
        ]);

        return  redirect($checkout_session->url);

    }

    public function successCheckout(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::retrieve($request->session_id);

        $pdf = PDF::loadView('pdf.ticket', compact('session'));

        $message = new CheckoutApplyNotification($session);
        $message->attachData($pdf->output(), "ticket.pdf");

        Mail::to($session->customer_email)
        ->send($message);
        return view('checkout.success', compact('session'));
    }
    public function resendEmailCheckout(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::retrieve($request->session_id);
        $pdf = PDF::loadView('pdf.ticket', compact('session'));

        $message = new CheckoutApplyNotification($session);
        $message->attachData($pdf->output(), "ticket.pdf");

        Mail::to($session->customer_email)
        ->send($message);
        return redirect()->back();
    }

    public function cancelCheckout(Request $request)
    {
        return view('checkout.cancel');
    }

    public function downloadTicket(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::retrieve($request->session_id);

        $pdf = PDF::loadView('pdf.ticket', compact('session'));
        return $pdf->stream();
    }
}
