<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Video;

class VideoList extends Component
{

    public function render()
    {
        $video = Video::all();
        dd($video);
        return view('livewire.video-list', ['video'=> $video]);
    }
}
