<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class SaranaPrasarana extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.sarana-prasarana')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
