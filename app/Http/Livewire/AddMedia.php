<?php

namespace App\Http\Livewire;

use App\Http\Controllers\MediaController;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;

class AddMedia extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('Name', 'name')->input()->rules('required')->placeholder('WarGames'),
            Field::make('Year', 'year')->input('number')->rules('required')->placeholder('1983'),
            Field::make('IMDB ID', 'imdb_id')->input()->placeholder('tt0086567'),
            Field::make('Media Type', 'media_type')->select([
                    'Anime Movie' => 'anime_movie',
                    'Anime OVA' => 'anime_ova',
                    'Anime Series' => 'anime_series',
                    'Movie' => 'movie',
                    'TV Series' => 'tv_series'])->rules('required')->placeholder('Choose Type'),
            Field::make('Cover Art', 'cover')->file()->rules('required')
        ];
    }

    public function success()
    {
        #return route('media.store', [$this]);
        MediaController::store($this->form_data);
    }

    public function saveAndStayResponse()
    {
        return redirect()->route('media.create');
    }

    public function saveAndGoBackResponse()
    {
        return redirect()->route('media.index');
    }
}
