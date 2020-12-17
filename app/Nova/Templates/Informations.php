<?php

namespace App\Nova\Templates;

use Laravel\Nova\Panel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Country;
use Whitecube\NovaPage\Pages\Template;

class Informations extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Quand', 'when'),
            Text::make('Ou', 'place'),
            Text::make('Prix', 'price'),

            new Panel('Adresse', $this->addressFields())
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the address fields for the resource.
     *
     * @return array
     */
    protected function addressFields()
    {
        return [
            Text::make('Addresse', 'adresse'),
            Text::make('Ville', 'city'),
            Text::make('Postal Code', 'postal_code'),
        ];
    }
}
