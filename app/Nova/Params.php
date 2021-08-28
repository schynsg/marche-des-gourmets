<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use PHPUnit\Util\Test;
use SimpleSquid\Nova\Fields\AdvancedNumber\AdvancedNumber;

class Params extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Params::class;

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
        //
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Number::make(__('Edition'), 'edition_number')->help('X eme édition'),
            AdvancedNumber::make(__('Prix de l\'entrée'), 'price')
                ->decimals(2)
                ->suffix('€')
                ->min(0),
            Number::make(__('Age entrée gratuite'), 'age_for_free')->help('Age maximum pour l\'entre gratuite'),
            Text::make(__('Date'), 'date'),
            Text::make(__('Adresse'), 'address'),
            Textarea::make(__('Horaire'), 'timetable'),
            Number::make(__('Nombre d\'entrées'), 'entries_number'),
            Text::make(__('Adresse de contact'), 'contact_address')->help('Adresse de la personne responsable'),
            Text::make(__('Numéro de téléphone de contact'), 'contact_phone')->help('Numéro de téléphone de la personne responsable'),
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

    public static function label() {
        return 'Réglages';
    }

    public static $group = 'Général';
}
