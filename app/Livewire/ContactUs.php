<?php

namespace App\Livewire;

use App\Models\contact;
use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        $contact = contact::orderBy('id')->get();
        // dd($contact);
        return view('livewire.contact-us',[
            'contact' => $contact
        ]);
    }
}
