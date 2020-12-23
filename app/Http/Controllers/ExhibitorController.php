<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use Illuminate\Http\Request;
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
        return view('pages.exhibitors', compact('allExhibitors'));
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
            'email' => 'required',
            'telephone' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'location' => 'required',
        ]);

        Exhibitor::create($validated);

        return redirect('/exposants#become-exhibitor');
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
