<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class ShowNews extends Component
{
    public function render()
    {
        $news = News::orderBy('id')->get();
            return view('livewire.show-news',[
                'news' => $news,
            ]);
    }
}
