<?php

namespace App\Http\Livewire\Weathers;

use App\Models\Weather;
use Livewire\Component;

class Create extends Component
{
    public $today,$percentage,$wind;

    public function addWeather(){

            $this->validate([
                'today'        => ['required','string','max:255'],
                'percentage'             => ['required'],
                'wind'           => ['required','string','max:255'],
            ]);

            Weather::create([
                'today'        => $this->today,
                'percentage'             => $this->percentage,
                'wind'           => $this->wind,
            ]);

            return redirect('/dashboard')->with('message', $this->today . ' added successfully');
    }



    public function render()
    {
        return view('livewire.weathers.create');
    }
}
