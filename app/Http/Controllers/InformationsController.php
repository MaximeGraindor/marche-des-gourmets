<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Manager;

class InformationsController extends Controller
{
    public function show(Request $request, Manager $page)
    {
        $page->loadForRoute($request->route());

        $currentEdition = Edition::all()->last();

        return view('pages.informations', compact('currentEdition'));
    }
}
