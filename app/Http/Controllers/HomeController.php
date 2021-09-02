<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Edition;
use Illuminate\Http\Request;
use ClassicO\NovaMediaLibrary\API;
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

        if($albums->count()){
            $array = [];
            foreach($albums as $album){
                array_push($array, $album->photos[0]->path[0]);
            }
            $arrayIdPhotos = API::getFiles($array, $imgSize = null, true);
        }else{
            $arrayIdPhotos = [];
        }

        foreach ($arrayIdPhotos as $key => $value) {
            $albums[$key]->cover_album = $value->name;
        }

        $editionDate = $currentEdition ? 'du ' . ($currentEdition->start_date)->format('j') . ' au ' . ($currentEdition->end_date)->format('j') . ' ' . $month[(($currentEdition->end_date)->format('n')) - 1] : null;

        return view('home', compact('currentEdition', 'editionDate', 'monthEdition', 'albums', 'arrayIdPhotos'));
    }
}
