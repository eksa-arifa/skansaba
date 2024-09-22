<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class VisiMisi extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.visi-misi')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
