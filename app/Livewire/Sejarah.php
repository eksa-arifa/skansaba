<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class Sejarah extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.sejarah')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
