<?php

namespace App\Livewire;

use App\Models\Water;
use Livewire\Component;

class ShowWater extends Component
{
    public function render()
    {
        $waters = Water::orderBy('id')->get();
        return view('livewire.show-water',[
            'waters' => $waters,
        ]);
    }
}
