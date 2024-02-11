<?php

namespace App\Livewire;

use Livewire\Component;
// use App\Livewire\Request;
use Illuminate\Http\Request;

class VideoForm extends Component
{

    public function render()
    {
        return view('livewire.video-form');
    }
}