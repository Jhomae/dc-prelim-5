<?php

namespace App\Http\Livewire\Weathers;

use App\Models\Weather;
use Livewire\Component;

class Index extends Component
{
    public function loadWeather() {
        $weathers = Weather::orderBy('today')->get();

        return compact('weathers');
    }

    public function render()
    {
        return view('livewire.weathers.index', $this->loadWeather());
    }
}
