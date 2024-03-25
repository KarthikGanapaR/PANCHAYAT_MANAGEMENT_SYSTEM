<?php

namespace App\Livewire;

use App\Models\Survey;
use Livewire\Component;

class ShowSurvey extends Component
{
    public function render()
    {
        $surveys = Survey::orderBy('id')->get();
            return view('livewire.show-survey',[
                'surveys' => $surveys,
            ]);
    }
}
