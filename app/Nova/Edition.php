<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Edition extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Edition::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title()
    {
        return 'Édition n°'. $this->numero . ' ' . '(' . ($this->start_date)->format('d/m/y') . ' - ' .($this->end_date)->format('d/m/y') .')';
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'numero',
    ];

    public static $group = 'Marché des Gourmets';

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            ID::make(__('ID'), 'id')->sortable(),

            Number::make('Numéro de l\'édition', 'numero'),

            Date::make('Date de début', 'start_date')->format('DD MMM YYYY'),
            Date::make('Date de fin', 'end_date')->format('DD MMM YYYY'),

            Text::make('Pays', 'country'),
            Text::make('Adresse', 'adress')->help('Chateau du Val Saint Lambert Esplanade du Val, 4100 Seraing'),

            File::make('Carte du restaurant', 'restaurant_path'),
            File::make('Carte du bar', 'bar_path'),

            Number::make('Prix d\'entré', 'price'),

            HasMany::make('album')

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
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
