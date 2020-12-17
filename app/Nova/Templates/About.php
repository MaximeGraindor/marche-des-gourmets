<?php

namespace App\Nova\Templates;

use Laravel\Nova\Panel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaPage\Pages\Template;

class About extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            new Panel('Le Marché des Gourmets', $this->mdgFields()),

            new Panel('Le Rotary Club de Flémalle', $this->rfFields()),

            new Panel('Le Rotary', $this->rotaryFields()),

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
     * Get the Marche des Gourmets fields for the resource.
     *
     * @return array
     */
    protected function mdgFields()
    {
        return [
            Text::make('Titre', 'mdgTitle'),
            Trix::make('Texte','mdgText')->alwaysShow(),
        ];
    }

    /**
     * Get the Rotary Flémalle fields for the resource.
     *
     * @return array
     */
    protected function rfFields()
    {
        return [
            Text::make('Titre', 'rfTitle'),
            Trix::make('Texte','rfText')->alwaysShow(),
        ];
    }

    /**
     * Get the Rotary fields for the resource.
     *
     * @return array
     */
    protected function rotaryFields()
    {
        return [
            Text::make('Titre', 'rotaryTitle'),
            Trix::make('Texte','rotaryText')->alwaysShow(),
        ];
    }
}
