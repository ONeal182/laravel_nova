<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class Slider extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Slider::class;


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
            Text::make(__('Название акции'),'name')->placeholder('Введите название акции'),
            DateTime::make(__('Начало акции'),'activeFrom'),
            DateTime::make(__('Конец акции'),'activeTo'),
            Image::make(__('Картинка слайдера'),'img-static')->disk('public')
            ->path('photos')
            ->prunable(),
            Text::make(__('Описание картинки слайдера'),'img-static-alt')->placeholder('Введите описание картинки слайдера'),
            Image::make(__('Hover картинки слайдера'),'img-hover')->disk('public')
            ->path('photos')
            ->prunable(),
            Text::make(__('Описание hover слайдера'),'img-hover-alt')->placeholder('Введите описание hover слайдера'),
            Number::make(__('Скидка акции'),'sale'),
            Text::make(__('Название кнопки'),'btn_name')->placeholder('Введите название кнопки'),
            Textarea::make(__('Описание акции'),'desc')->placeholder('Введите описание акции'),
            Text::make(__('Текст срока действия промокода'),'time')->placeholder('Введите текст срока действия промокода'),
            Text::make(__('Ссылка на акцию'),'link')->placeholder('Введите ссылка на акцию'),
            
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
