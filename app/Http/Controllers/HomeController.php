<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Edition;
use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Manager;
use Laravel\Nova\Testing\Browser\Pages\Page;

class HomeController extends Controller
{
    public function show(Request $request, Manager $page)
    {
        $page->loadForRoute($request->route());
        $month = ['Janvier', 'Février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
        $currentEdition = Edition::all()->last();
        $monthEdition = $currentEdition ? $month[(($currentEdition->end_date)->format('n')) - 1] : null;

        $albums = Album::with('photos')->get();
        //return $albums;

        $editionDate = $currentEdition ? 'du ' . ($currentEdition->start_date)->format('j') . ' au ' . ($currentEdition->end_date)->format('j') . ' ' . $month[(($currentEdition->end_date)->format('n')) - 1] : null;

        return view('home', compact('currentEdition', 'editionDate', 'monthEdition', 'albums'));
    }
}
