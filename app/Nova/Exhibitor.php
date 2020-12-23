<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Exhibitor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Exhibitor::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static $group = 'Les exposants';

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Les exposants';
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'exposant';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            Text::make('Prénom', 'firstname')
                ->rules('required'),

            Text::make('Nom', 'name')
                ->rules('required'),

            Text::make('Nom de la société', 'company_name')
                ->help('Facultatif'),

            Text::make('Email', 'email')
                ->rules('required'),

            Text::make('Telephone', 'telephone')
                ->rules('required'),

            Text::make('Pays', 'country')
                ->rules('required'),

            Text::make('Code Postal', 'postal_code')
                ->rules('required'),

            Text::make('Localité', 'location')
                ->rules('required'),

            Text::make('Site web', 'website')
                ->help('Facultatif'),

            Textarea::make('Informations supplémentaires', 'informations')
                ->help('Facultatif'),

            Boolean::make('Validé', 'agree')
                ->rules('required'),

            BelongsToMany::make('keywords')
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
