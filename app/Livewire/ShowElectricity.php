<?php

namespace App\Livewire;

use App\Models\Electricity;
use Livewire\Component;

class ShowElectricity extends Component
{
    public function render()
    {
        
            $electricities = Electricity::orderBy('id')->get();
            return view('livewire.show-electricity',[
                'electricities' => $electricities,
            ]);
    }
        
}

