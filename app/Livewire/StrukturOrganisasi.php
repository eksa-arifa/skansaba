<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class StrukturOrganisasi extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.struktur-organisasi')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
