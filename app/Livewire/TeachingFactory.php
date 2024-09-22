<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class TeachingFactory extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.teaching-factory')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
