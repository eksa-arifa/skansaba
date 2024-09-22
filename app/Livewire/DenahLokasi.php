<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class DenahLokasi extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.denah-lokasi')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
