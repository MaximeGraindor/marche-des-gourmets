<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use App\Models\Exhibitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExhibitorApplyNotification;
use App\Http\Requests\StoreExhibitorRequest;

class ExhibitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allExhibitors = Exhibitor::with('keywords')
            ->where('agree', true)
            ->get();

        $allKeywords = Keyword::all();

        return view('pages.exhibitors', compact('allExhibitors', 'allKeywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'test';
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
            'firstname' => 'required',
            'name' => 'required',
            'company_name' => 'nullable',
            'email' => 'required',
            'telephone' => 'required',
            'country' => 'required',
            'postal_code' => 'required|integer',
            'location' => 'required',
            'informations' => 'nullable',
            'keywords' => 'required',
        ]);

        $exhibitor = Exhibitor::create($validated);

        foreach ($request->keywords as $keyword) {
            $keywordId = Keyword::all()->where('name', $keyword)->first()->id;
            $exhibitor->keywords()->attach($keywordId);
        };

        Mail::to('maxime.graindor@hotmail.com')->send(new ExhibitorApplyNotification($validated));


        return redirect()->back()->with('success', 'Votre candidature s\'est bien envoyé!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibitor $exhibitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibitor $exhibitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibitor $exhibitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibitor $exhibitor)
    {
        //
    }
}
