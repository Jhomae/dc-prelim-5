<?php

namespace App\Http\Livewire\Weathers;
use App\Models\Weather;
use Livewire\Component;

class Delete extends Component
{

    public $weatherId;



    public function getWeatherProperty(){
        return Weather::find($this->weatherId);
    }

    public function render()
    {
        return view('livewire.weathers.delete');
    }
    public function delete() {
        $this->weather->delete();

        return redirect('/dashboard')->with('message', $this->weather->today . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
