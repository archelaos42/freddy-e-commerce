<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Orlyapps\NovaBelongsToDepend\NovaBelongsToDepend;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

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
        'id', 'name',
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
            ID::make(__('ID'), 'id')->sortable(),
            Text::make( 'name')->sortable(),
            Text::make( 'slug')->sortable(),
            Image::make(__('Image'), 'featuredimage')->nullable(),
            Number::make( 'price')->sortable(),
            Number::make( 'quantity')->sortable(),
            Select::make('Size')->options([
                'XXS',
                'XS',
                'S',
                'M',
                'L',
                'XL',
            ]),
            Text::make( 'color')->sortable(),
            Text::make( 'length')->sortable(),
            Text::make( 'waist')->sortable(),
            Textarea::make( 'description')->sortable(),
            Boolean::make('popular'),
            Number::make('code'),

            NovaBelongsToDepend::make('Collection')
                ->options(\App\Models\Collection::all()),
            HasMany::make('Category'),

            NovaBelongsToDepend::make('Category')
                ->optionsResolve(function ($collection) {
                    return \App\Models\Category::query()->where('collection_id', $collection->id)->get(['id','name']);
                })
                ->dependsOn('Collection')->nullable(),

            NovaBelongsToDepend::make('Subcategory')
                ->optionsResolve(function ($category) {
                    return \App\Models\Subcategory::query()->where('category_id', $category->id)->get(['id','name']);
                })
                ->dependsOn('Category')->nullable(),
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
