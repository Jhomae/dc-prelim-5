<?php

namespace App\Http\Livewire\Weathers;
use App\Models\Weather;
use Livewire\Component;

class Edit extends Component
{

    public $weatherId;
    public $today,$wind,$percentage;


    public function mount(){

        $this->today = $this->weather->today;
        $this->wind = $this->weather->wind;
        $this->percentage = $this->weather->percentage;

    }

    public function editWeather()
    {
        $this->validate([
            'today'        => ['required','string','max:255'],
            'wind'             => ['required'],
            'percentage'           => ['required','string','max:255'],
        ]);

        $this->weather->update([
            'today'=> $this->today,
            'wind'=> $this->wind,
            'percentage'=> $this->percentage,
        ]);

        return redirect('/dashboard')->with('message', $this->weather->today .' updated successfully');
    }


    public function getWeatherProperty(){
        return Weather::find($this->weatherId);
    }

    public function render()
    {
        return view('livewire.weathers.edit');
    }
}
