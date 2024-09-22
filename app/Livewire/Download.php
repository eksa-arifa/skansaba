<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class Download extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.download')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
