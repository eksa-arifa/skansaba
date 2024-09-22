<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class Ekstrakurikuler extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.ekstrakurikuler')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
