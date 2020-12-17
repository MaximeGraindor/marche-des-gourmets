<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Manager;

class About extends Controller
{
    public function show(Request $request, Manager $page)
    {
        $page->loadForRoute($request->route());
        return view('pages.about');
    }
}
