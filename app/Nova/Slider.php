<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;
use Jackabox\DuplicateField\DuplicateField;

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
            ID::make(__('ID'), 'id')->sortable()->hideFromIndex(),
            Boolean::make(__('Активная'),'active')->trueValue('Y')->falseValue('N'),
            Text::make(__('Название'),'name')->placeholder('Введите название сайта'),
            Text::make(__('Ссылка'),'link',function(){
                $username = $this->link;

                return mb_strimwidth("{$username}", 0, 50, "...");
            })->placeholder('Введите ссылка на акцию')->asHtml(),
            // DateTime::make(__('Начало акции'),'active_from'),
            // DateTime::make(__('Конец акции'),'active_to'),
            Image::make(__('Картинка слайдера'),'img_static')->disk('public')
            ->path('photos')
            ->prunable(),
           
            Image::make(__('Hover картинки слайдера'),'img_hover')->disk('public')
            ->path('photos')
            ->prunable(),

            Number::make(__('Скидка'),'sale'),
            Text::make(__('Купон'),'coupone')->placeholder('Введите номер купона'),
            Text::make(__('Кнопка'),'btn_name')->placeholder('Введите название кнопки')->hideFromIndex(),
            Text::make(__('Кнопка hover'),'btn_name2')->placeholder('Введите название кнопки hover')->hideFromIndex(),
            // Textarea::make(__('Описание акции'),'desc')->placeholder('Введите описание акции'),
            Text::make(__('Текст срока действия промокода'),'time')->placeholder('Введите текст срока действия промокода')->hideFromIndex(),
            DuplicateField::make('Duplicate')
            ->withMeta([
                'resource' => 'sliders', // resource url
                'model' => 'App\Models\Slider', // model path
                'id' => $this->id, // id of record
                'Relations' => [ 'img_static' , 'img_hover' ],
                
            ])
            
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
