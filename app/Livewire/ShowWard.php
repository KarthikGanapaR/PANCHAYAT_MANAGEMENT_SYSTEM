<?php

namespace App\Livewire;

use App\Models\Ward;
use Livewire\Component;

class ShowWard extends Component
{
    public function render()
    {
        $wards = Ward::orderBy('ward_no')->get();
        return view('livewire.show-ward',[
            'wards' => $wards,
        ]);
    }
}
