<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Whitecube\NovaPage\Pages\Manager;

class ContactController extends Controller
{
    public function show(Request $request, Manager $page)
    {
        $page->loadForRoute($request->route());
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($validated);

        Mail::to('maxime.graindor@hotmail.com')->send(new ContactNotification($validated));

        return redirect('/contact');
    }


}
